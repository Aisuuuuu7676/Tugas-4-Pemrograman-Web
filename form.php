<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['ttl'] = $_POST['ttl'];
    $_SESSION['pendidikan'] = $_POST['pendidikan'];
    header("Location: cv.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Isi Data CV</h2>
        <form method="POST">
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="text" name="ttl" placeholder="Tempat, Tanggal Lahir" required>
            <input type="text" name="pendidikan" placeholder="Riwayat Pendidikan" required>
            <button type="submit">Buat CV</button>
        </form>
    </div>
</body>
</html>
