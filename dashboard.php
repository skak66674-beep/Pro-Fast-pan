<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['is_paid'] != 1) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>Retailer Workspace - Pro Fast Pan</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
    <div class="bg-blue-900 text-white p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Pro Fast Pan - Retailer Portal</h1>
        <a href="logout.php" class="bg-red-500 px-4 py-2 rounded text-sm">Logout</a>
    </div>

    <div class="max-w-4xl mx-auto mt-10 p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Retailer Workspace</h2>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-6 rounded-lg shadow border hover:shadow-md cursor-pointer">
                <h3 class="font-bold text-blue-800">New PAN Apply</h3>
                <p class="text-sm text-gray-500">Apply for a new PAN card easily.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow border hover:shadow-md cursor-pointer">
                <h3 class="font-bold text-blue-800">Minor PAN Apply</h3>
                <p class="text-sm text-gray-500">Apply for minors below 18 years.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow border hover:shadow-md cursor-pointer">
                <h3 class="font-bold text-blue-800">PAN Correction</h3>
                <p class="text-sm text-gray-500">Update details in existing PAN.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow border hover:shadow-md cursor-pointer">
                <h3 class="font-bold text-blue-800">PAN Number Find</h3>
                <p class="text-sm text-gray-500">Find lost PAN card number.</p>
            </div>
        </div>
    </div>
</body>
</html>
