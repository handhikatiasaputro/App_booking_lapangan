<?php
require "db.php";

// Menambahkan booking
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $lapangan = $_POST['lapangan'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];

    $db->query("INSERT INTO bookings (nama, lapangan, tanggal, waktu) VALUES ('$nama', '$lapangan', '$tanggal', '$waktu')");
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Booking Lapangan</title>
</head>
<body>
    <div class="container">
        <h1>Booking Disini</h1>
        <form action="" method="POST">
            <label for="nama">Nama</label>
            <input type="text" name="nama" required>
            
            <label for="lapangan">Pilih Lapangan</label>
            <select name="lapangan" required>
                <option value="">Pilih lapangan</option>
                <option value="lapangan 1">Lapangan 1</option>
                <option value="lapangan 2">Lapangan 2</option>
                <option value="lapangan 3">Lapangan 3</option>
                <option value="lapangan 4">Lapangan 4</option>
            </select>
            
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" required>
            
            <label for="waktu">Waktu</label>
            <select name="waktu" required>
                <option value="09:00 - 10.00">09:00 - 10.00</option>
                <option value="10:00 - 11.00">10:00 - 11.00</option>
                <option value="11:00 - 12.00">11:00 - 12.00</option>
                <option value="12:00 - 13.00">12:00 - 13.00</option>
                <option value="13:00 - 14.00">13:00 - 14.00</option>
                <option value="14:00 - 15.00">14:00 - 15.00</option>
                <option value="15:00 - 16.00">15:00 - 16.00</option>
                <option value="16:00 - 17.00">16:00 - 17.00</option>
                <option value="17:00 - 18.00">17:00 - 18.00</option>
                <option value="18:00 - 16.00">18:00 - 19.00</option>
                <option value="19:00 - 20.00">19:00 - 20.00</option>
                <option value="20:00 - 21.00">20:00 - 21.00</option>
                <option value="21:00 - Tutup">21:00 - Tutup</option>
            </select>
            
            <input type="submit" name="submit" value="Booking" class="button">
        </form>
        <a href="index.php"class="back" >kembali</a>
    </div>
</body>
</html>