<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Welkom op je homepage!</h1>
        <p>Je bent succesvol ingelogd als <strong>jenaam@shop.com</strong>.</p>
        <a href="logout.php" class="logout-button">Uitloggen</a>
    </div>
</body>
</html>
