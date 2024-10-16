<?php
    $db = new SQLite3('db_bookings.sqlite');
    
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
    waktu TEXT)");
    
?>
