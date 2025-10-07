<?php
$keyId     = "rzp_live_Ih5mpcLAOBjmvW";   // Replace with your Key ID
$keySecret = "89s0v3wQcnLpYXc1Nbe5sXhh";   // Replace with your Key Secret

$paymentId = $_POST['razorpay_payment_id'];
$orderId   = $_POST['razorpay_order_id'];
$signature = $_POST['razorpay_signature'];

// Generate signature using hash_hmac
$generated_signature = hash_hmac('sha256', $orderId . '|' . $paymentId, $keySecret);

if ($generated_signature === $signature) {
    echo "<h3>Payment Successful & Verified</h3>";
    // Save to database here
} else {
    echo "<h3>Payment Verification Failed</h3>";
}
