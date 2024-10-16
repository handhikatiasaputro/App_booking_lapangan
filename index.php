<?php
require "db.php";


// Menghapus booking
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $db->query("DELETE FROM bookings WHERE id = $id");

}

// Mengambil semua bookings
$result = $db->query("SELECT * FROM bookings ORDER BY tanggal,waktu ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Booking Lapangan Futsal</title>
</head>
<body>
    <div class="container">
        <h1>Lapangan Futsal Sejahtera</h1>
        <a href="add_booking.php" class="button">Booking Disini</a>
        <table>
            <tr>
                <th>Nama</th>
                <th>Lapangan</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = $result->fetchArray()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['nama']); ?></td>
                <td><?php echo htmlspecialchars($row['lapangan']); ?></td>
                <td><?php echo htmlspecialchars(date('d-m-Y', strtotime($row['tanggal']))); ?></td>
                <td><?php echo htmlspecialchars($row['waktu']); ?></td>
                <td>
                    <a href="edit_booking.php?id=<?php echo $row['id']; ?>" class="button-edit">Edit</a>
                    <a href="index.php?delete=<?php echo $row['id'];?>" onclick="return confirm('Kamu Yakin Mau Hapus Ini?')" class="button-delete">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>