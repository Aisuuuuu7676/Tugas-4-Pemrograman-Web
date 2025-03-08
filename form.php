<?php include 'session.php'; ?>

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
        <h2>Form CV</h2>
        <form action="cv.php" method="POST">
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="text" name="ttl" placeholder="Tempat, Tanggal Lahir" required>
            <textarea name="pendidikan" placeholder="Riwayat Pendidikan" required></textarea>
            <button type="submit">Buat CV</button>
        </form>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
