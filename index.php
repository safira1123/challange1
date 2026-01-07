<!DOCTYPE html>
<html>
<head>
    <title>Lamaran Pekerjaan</title>
</head>
<body>

<h2>Form Lamaran Pekerjaan</h2>

<form method="post">
    Nama:<br>
    <input type="text" name="nama" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Posisi Dilamar:<br>
    <input type="text" name="posisi" required><br><br>

    <button type="submit" name="kirim">Kirim</button>
</form>

<hr>

<?php
if (isset($_POST['kirim'])) {
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $posisi = $_POST['posisi'];

    echo "<h3>Data Lamaran</h3>";
    echo "Nama: $nama <br>";
    echo "Email: $email <br>";
    echo "Posisi Dilamar: $posisi <br>";
}
?>

</body>
</html>
