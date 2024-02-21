<?php
include "../lala-main/koneksi.php";

header('Content-Type: application/json'); // Set the content type to JSON

if (isset($_GET['id'])) {
    $idBarang = $_GET['id'];
    $result = $koneksi->query("SELECT * FROM barang WHERE id = $idBarang");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $data = array(
            'jenis_barang' => $row['jenis_barang'],
            'nama_barang' => $row['nama_barang'],
            'harga_barang' => $row['harga_barang']
        );
        echo json_encode($data); // Output as JSON for easier processing on the client side
    } else {
        echo json_encode(array('error' => 'Data tidak ditemukan')); // Output an error message as JSON
    }
}
?>
