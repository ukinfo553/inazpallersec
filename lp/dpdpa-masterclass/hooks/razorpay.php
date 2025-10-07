<?php
// ---- CONFIG ----
$WEBHOOK_SECRET = 'dpdparsecretpayhooks';
$EVENT_NAME     = 'DPDPA Masterclass';

// Absolute URL to your existing sender (recommended)
$SEND_AJAX_URL  = 'https://www.infosectrain.com/pages/lp/dpdpa-masterclass/send-ajax.php';

// ---- small logger (optional but strongly recommended) ----
function rzp_log($msg) {
  @file_put_contents(__DIR__ . '/razorpay.log', '['.date('c').'] '.$msg.PHP_EOL, FILE_APPEND);
}

// ---- read & verify signature ----
$raw = file_get_contents('php://input');
$sig = $_SERVER['HTTP_X_RAZORPAY_SIGNATURE'] ?? ''; // Razorpay sends this header
if (!$sig) { http_response_code(400); echo 'Missing signature'; exit; }
$calc = hash_hmac('sha256', $raw, $WEBHOOK_SECRET);
if (!hash_equals($calc, $sig)) { http_response_code(400); echo 'Bad signature'; exit; }

// ---- parse ----
$payload = json_decode($raw, true);
if (!is_array($payload) || ($payload['event'] ?? '') !== 'payment.captured') {
  http_response_code(200); echo 'Ignored'; exit;
}

$payment   = $payload['payload']['payment']['entity'] ?? [];
$paymentId = $payment['id'] ?? '';
if (!$paymentId) { http_response_code(200); echo 'No payment id'; exit; }

// ---- idempotency (avoid duplicate emails on webhook retries) ----
$lockDir = __DIR__ . '/.locks';
if (!is_dir($lockDir)) @mkdir($lockDir, 0775, true);
$lockFile = $lockDir . '/'.$paymentId.'.lock';
if (file_exists($lockFile)) { http_response_code(200); echo 'Already processed'; exit; }

// ---- collect minimal fields for your send-ajax.php ----
$name    = $payment['notes']['name'] ?? ($payment['customer']['name'] ?? 'Participant');
$email   = $payment['email'] ?? ($payment['customer']['email'] ?? '');
$phone   = $payment['contact'] ?? ($payment['customer']['contact'] ?? '');
$pageurl = 'https://www.infosectrain.com/pages/lp/dpdpa-masterclass/';

if (!$email) {
  // Don’t loop forever if no email present
  @file_put_contents($lockFile, 'no-email');
  rzp_log("No email for payment {$paymentId}");
  http_response_code(200); echo 'No email present'; exit;
}

$amount = $payment['amount'] ?? '';
$currency = $payment['currency'] ?? '';

// Example payment data from webhook
$amount = $payment['amount'] ?? 0;      // in smallest unit (paise/cents)
$currency = $payment['currency'] ?? '';

// Convert to main unit if you want (optional)
// $amount = $amount / 100;

// Define valid combinations
$validPayments = [
    'INR' => [100, 99900], // 1 INR or 999 INR (in paise)
    'USD' => [7500]         // 75 USD (in cents)
];

// Validate
if (isset($validPayments[$currency]) && in_array($amount, $validPayments[$currency])) {
    // Payment is valid
    //echo "Payment verified: $amount $currency";
	// Get the payment page ID from the notes
$pageId = $payment['payment_page_id']  ?? $payment['payment_link_id'] ?? ($payment['notes']['page_id'] ?? '');

//$post['me_paymentData'] = json_encode($payment, JSON_PRETTY_PRINT);

// ---- POST to your existing sender (expects me_* fields) ----
$post = [
  'me_submited' => '1',
  'me_name'     => $name,
  'me_email'    => $email,
  'me_phone'    => $phone,
  'me_others'   => 'Payment ID: '.$paymentId.' | Event: '.$EVENT_NAME.' | payment_page_id: '.$pageId.' | amount: '.$amount.' | Full Payment Data: '.json_encode($payment, JSON_PRETTY_PRINT),
  'me_pageurl'  => $pageurl,
  'me_paymentId'  => $paymentId
];

$ch = curl_init($SEND_AJAX_URL);
curl_setopt_array($ch, [
  CURLOPT_POST           => true,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POSTFIELDS     => $post,              // form-encoded POST
  CURLOPT_TIMEOUT        => 20,
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_SSL_VERIFYHOST => 2,
]);
$response = curl_exec($ch);
$err      = curl_error($ch);
$http     = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// log first 300 chars of response for debugging
rzp_log("mail http={$http} err=" . ($err ?: 'nil') . " resp=" . substr((string)$response, 0, 300));

if ($err || $http < 200 || $http >= 300) {
  // return 500 so Razorpay retries the webhook automatically
  http_response_code(500);
  echo 'Mailer error';
  exit;
}

// mark processed only on success
@file_put_contents($lockFile, 'done');
http_response_code(200);
echo 'OK';
} else {
    // Payment mismatch
    echo "Invalid payment: $amount $currency";
}



