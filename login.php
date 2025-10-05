<?php
session_start();

$correct_email = "jenaam@shop.com";
$correct_password = "12345isnotsecure";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === $correct_email && $password === $correct_password) {
        $_SESSION["loggedin"] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Foute gebruikersnaam of wachtwoord!";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="post" action="login.php">
            <label for="email">E-mailadres:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Inloggen</button>
        </form>
    </div>
</body>
</html>
