<?php
require('phpqrcode/qrlib.php'); // Include the PHP QR Code library

// Data for QR Code (Modify this as needed)
$payment_data = "upi://pay?pa=yourupi@upi&pn=VCET Canteen&am=100&cu=INR"; // UPI Payment Link

// Set QR Code file path
$qrcode_path = "qrcodes/payment_qr.png"; 

// Generate QR Code and save it
QRcode::png($payment_data, $qrcode_path, QR_ECLEVEL_L, 10);

// Display QR Code in the browser
header('Content-Type: image/png');
readfile($qrcode_path);
?>