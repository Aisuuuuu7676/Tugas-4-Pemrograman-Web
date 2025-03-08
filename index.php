<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Ambil domain dari email
        $emailParts = explode("@", $email);
        $correctPassword = $emailParts[1] ?? '';

        if ($password === $correctPassword) {
            $_SESSION['email'] = $email;
            header("Location: form.php");
            exit();
        } else {
            $error = "Email atau password salah!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="email" name="email" placeholder="Masukkan Email" required>
            <input type="password" name="password" placeholder="Masukkan Password (gunakan pw (gmail.com))" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
