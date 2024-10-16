<?php
// Koneksi ke SQLite database
require "db.php";

// Mengambil data booking yang akan diedit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $db->query("SELECT * FROM bookings WHERE id = $id");
    $booking = $result->fetchArray();
}

// Menyimpan perubahan
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $lapangan = $_POST['lapangan'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    
    $db->query("UPDATE bookings SET nama = '$nama', lapangan = '$lapangan', tanggal = '$tanggal', waktu = '$waktu' WHERE id = $id");
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Booking</title>
</head>
<body>
    <div class="container">
        <h1>Edit Booking</h1>
        <form action="" method="POST">
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="<?php echo htmlspecialchars($booking['nama']); ?>" required>
            
            <label for="lapangan">Pilih Lapangan</label>
            <select name="lapangan" required>
                <option value="lapangan" <?php if($booking['lapangan'] == 'lapangan') echo 'selected'; ?>>lapangan</option>
                <option value="lapangan 1" <?php if($booking['lapangan'] == 'lapangan 1') echo 'selected'; ?>>lapangan 1</option>
                <option value="lapangan 2" <?php if($booking['lapangan'] == 'lapangan 2') echo 'selected'; ?>>lapangan 2</option>
                <option value="lapangan 3" <?php if($booking['lapangan'] == 'lapangan 3') echo 'selected'; ?>>lapangan 3</option>
                <option value="lapangan 4" <?php if($booking['lapangan'] == 'lapangan 4') echo 'selected'; ?>>lapangan 4</option>
            </select>   
            
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" value="<?php echo htmlspecialchars($booking['tanggal']); ?>" required>
            
            <label for="waktu">Waktu</label>
            <select name="waktu" required>
                <option value="">Pilih Waktu</option>
                <option value="09:00 - 10:00" <?php if($booking['waktu'] == '09:00 - 10:00') echo 'selected'; ?>>09:00 - 10:00</option>
                <option value="10:00 - 11:00" <?php if($booking['waktu'] == '10:00 - 11:00') echo 'selected'; ?>>10:00 - 11:00</option>
                <option value="11:00 - 12:00" <?php if($booking['waktu'] == '11:00 - 12:00') echo 'selected'; ?>>11:00 - 12:00</option>
                <option value="12:00 - 13:00" <?php if($booking['waktu'] == '12:00 - 13:00') echo 'selected'; ?>>12:00 - 13:00</option>
                <option value="13:00 - 14:00" <?php if($booking['waktu'] == '13:00 - 14:00') echo 'selected'; ?>>13:00 - 14:00</option>
                <option value="14:00 - 15:00" <?php if($booking['waktu'] == '14:00 - 15:00') echo 'selected'; ?>>14:00 - 15:00</option>
                <option value="15:00 - 16:00" <?php if($booking['waktu'] == '15:00 - 16:00') echo 'selected'; ?>>15:00 - 16:00</option>
                <option value="16:00 - 17:00" <?php if($booking['waktu'] == '16:00 - 17:00') echo 'selected'; ?>>16:00 - 17:00</option>
                <option value="17:00 - 18:00" <?php if($booking['waktu'] == '17:00 - 18:00') echo 'selected'; ?>>17:00 - 18:00</option>
                <option value="18:00 - 16:00" <?php if($booking['waktu'] == '18:00 - 19:00') echo 'selected'; ?>>18:00 - 19:00</option>
                <option value="19:00 - 20:00" <?php if($booking['waktu'] == '19:00 - 20:00') echo 'selected'; ?>>19:00 - 20:00</option>
                <option value="20:00 - 21:00" <?php if($booking['waktu'] == '20:00 - 21:00') echo 'selected'; ?>>20:00 - 21:00</option>
                <option value="21:00 - Tutup" <?php if($booking['waktu'] == '21:00 - Tutup') echo 'selected'; ?>>21:00 - Tutup</option>
            </select>
            
            <input type="submit" name="submit" value="Update Booking" class="button">
        </form>
        <a href="index.php" class="back">kembali</a>
    </div>
</body>
</html>