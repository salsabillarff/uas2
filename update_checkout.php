<?php
include "../lala-main/koneksi.php";

// Check if keranjangId is set and is a valid number

if (isset($_POST['keranjang_id']) && is_numeric($_POST['keranjang_id'])) {
    $keranjangId = $_POST['keranjang_id'];
    $payment = $_POST['payment'];
    
    $queryTotalHarga = "SELECT total_harga FROM keranjang2 WHERE keranjang_id = $keranjangId LIMIT 1";
    
    $total_harga = $koneksi->query($queryTotalHarga)->fetch_assoc()['total_harga'];
    
    $kembalian = $payment - $total_harga;

    if ($kembalian < 0) {
        header("location:keranjang.php?pesan=checkoutGagalKurang");
    }else{
        
        // Perform database update and item removal

        $queryUpdate = "INSERT INTO checkout (nama, alamat, no_hp, nama_barang, jenis_barang, harga_barang, jumlah_barang, total_harga, pembayaran, kembali_pembayaran, created_date)
                    SELECT nama, alamat, no_hp, nama_barang, jenis_barang, harga_barang, jumlah_barang, total_harga, $payment, $kembalian, NOW() as created_date
                    FROM keranjang2
                    WHERE keranjang_id = $keranjangId";
        $queryDelete = "DELETE FROM keranjang2 WHERE keranjang_id = $keranjangId";

        $resultUpdate = $koneksi->query($queryUpdate);
        $resultDelete = $koneksi->query($queryDelete);

        if ($resultUpdate && $resultDelete) {
            header("location:keranjang.php?pesan=checkoutBerhasil");
        } else {
            header("location:keranjang.php?pesan=checkoutGagal");
        }        
        
    }    
    

} else {
    echo "invalid"; // Return invalid request to the AJAX request
}
?>
