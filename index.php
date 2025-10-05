<?php
session_start();

// Controle: is de gebruiker ingelogd?
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Niet ingelogd? Terug naar loginpagina.
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
</head>
<body>
    <h1>Welkom op je homepage!</h1>
    <p>Je bent succesvol ingelogd als <strong>jenaam@shop.com</strong>.</p>
    <a href="logout.php">Uitloggen</a>
</body>
</html>
