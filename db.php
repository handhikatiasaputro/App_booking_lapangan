<?php
    $db = new SQLite3('bookings.db');
    
    if(!$db) {
        echo $db->lastErrorMsg();
      } else {
        // echo "Open database success...\n";
      } 

    // Membuat tabel jika belum ada
    $db->query("
    CREATE TABLE IF NOT EXISTS bookings (
    id INTEGER PRIMARY KEY AUTOINCREMENT, 
    nama TEXT, 
    lapangan TEXT, 
    tanggal TEXT, 
    waktu_main TEXT,
    waktu_selesai TEXT)");
    
?>
