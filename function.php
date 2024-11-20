<?php
require "db.php";

function tambah_data($nama, $lapangan, $tanggal, $waktu) 
{
    GLOBAL $db;

    $tambah = $db->query("INSERT INTO bookings (nama, lapangan, tanggal, waktu) VALUES ('$nama', '$lapangan', '$tanggal', '$waktu')");
    return $tambah;
}

function ambil_data($id) 
{
    GLOBAL $db;
    $result = $db->query("SELECT * FROM bookings WHERE id = $id");
    $booking = $result->fetchArray();
    return $booking;
}

function edit_data($nama, $lapangan, $tanggal, $waktu, $id) 
{
    GLOBAL $db;
    $edit = $db->query("UPDATE bookings SET nama = '$nama', lapangan = '$lapangan', tanggal = '$tanggal', waktu = '$waktu' WHERE id = $id");
    return $edit;
}

function hapus($id) 
{
    GLOBAL $db;
    $hapus = $db->query("DELETE FROM bookings WHERE id = $id");
    return $hapus;
}
