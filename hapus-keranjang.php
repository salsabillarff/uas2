<?php
session_start();
if (empty($_SESSION['user_id'])){
    header("location:../lala-main/login.php");
    exit(); // Tambahkan exit() setelah header untuk memastikan tidak ada kode ekstra yang dijalankan.
}

$id=$_GET['id'];

include "../lala-main/koneksi.php";

// Gunakan parameterized queries
$hapus = $koneksi->prepare("DELETE FROM keranjang2 WHERE keranjang_id = ?");
$hapus->bind_param("i", $id);
$hapus->execute();

if ($hapus->affected_rows > 0) {
    header("location:tampil-keranjang.php?pesan=hapusBerhasil");
} else {
    echo "Error: " . $koneksi->error;
}

// Tutup statement dan koneksi
$hapus->close();
$koneksi->close();
?>
