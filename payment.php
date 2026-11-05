<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['verify_payment'])) {
    $username = $_SESSION['username'];
    $sql = "UPDATE users SET is_paid = 1 WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    if ($stmt->execute()) {
        $_SESSION['is_paid'] = 1;
        header("Location: dashboard.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>Payment Required - ₹100</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 text-center">
        <h2 class="text-2xl font-bold text-red-600 mb-2">Payment Pending</h2>
        <p class="text-gray-600 mb-4">पोर्टल एक्सेस करने के लिए <b>₹100</b> का भुगतान करें।</p>
        
        <div class="border p-4 rounded mb-4 inline-block bg-gray-50">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=upi://pay?pa=637845364325@axl&am=100&pn=ProFastPan" alt="QR Code" class="mx-auto">
            <p class="text-xs text-gray-500 mt-2">Scan & Pay ₹100</p>
        </div>

        <form method="POST">
            <button type="submit" name="verify_payment" class="w-full bg-green-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-700">मैंने पेमेंट कर दिया (Verify)</button>
        </form>
    </div>
</body>
</html>
