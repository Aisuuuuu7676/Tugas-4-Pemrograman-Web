<?php include 'session.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $pendidikan = $_POST['pendidikan'];
    $email = $_SESSION['email'];
} else {
    header("Location: form.php");
    exit();
}
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
    <div class="container">
        <h2>CV</h2>
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Tempat, Tanggal Lahir:</strong> <?php echo $ttl; ?></p>
        <p><strong>Riwayat Pendidikan:</strong> <?php echo nl2br($pendidikan); ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
