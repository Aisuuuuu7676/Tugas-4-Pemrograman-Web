<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: form.php");
    exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $domain = explode("@", $email)[1];  // Ambil domain dari email
        if ($password === $domain) {
            $_SESSION['email'] = $email;
            header("Location: form.php");
            exit();
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Format email tidak valid!";
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
        <?php if ($error) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="email" name="email" placeholder="Masukkan Email" required>
            <input type="password" name="password" placeholder="Masukkan Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
