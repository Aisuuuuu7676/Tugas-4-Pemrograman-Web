<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['nama'])) {
    header("Location: index.php");
    exit();
}

$nama = $_SESSION['nama'];
$ttl = $_SESSION['ttl'];
$pendidikan = $_SESSION['pendidikan'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container cv">
        <h2>Curriculum Vitae</h2>
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Tempat, Tanggal Lahir:</strong> <?php echo $ttl; ?></p>
        <p><strong>Riwayat Pendidikan:</strong> <?php echo $pendidikan; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
    </div>
</body>
</html>
