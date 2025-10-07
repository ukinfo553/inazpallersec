<?php
$payment_id = 'pay_ROuBuB16FpRUlb'; // replace with your actual payment ID
$key_id     = 'rzp_live_Ih5mpcLAOBjmvW';
$key_secret = '89s0v3wQcnLpYXc1Nbe5sXhh';

// Razorpay API URL
$url = "https://api.razorpay.com/v1/payments/$payment_id";

// Initialize cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$key_id:$key_secret"); // Basic Auth
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

// Execute request
$response = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);

if ($err) {
    echo "cURL Error: $err";
    exit;
}

// Decode JSON response
$payment = json_decode($response, true);
print_r($payment);
if (!$payment || isset($payment['error'])) {
    echo "Error fetching payment details.";
    exit;
}

// Get Page ID from payment
$pageId = $payment['payment_page_id'] 
       ?? $payment['payment_link_id'] 
       ?? ($payment['notes']['page_id'] ?? '');

echo "Payment ID: " . $payment['id'] . "<br>";
echo "Amount: " . $payment['amount'] / 100 . " " . $payment['currency'] . "<br>";
echo "Page ID: " . $pageId . "<br>";
?>