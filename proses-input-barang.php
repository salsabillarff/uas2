<?php
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$harga_barang = $_POST['harga_barang'];

// Handle image upload
$target_dir = "image/";  // Set your upload directory
$target_file = $target_dir . basename($_FILES["gambar_barang"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is a valid image
$check = getimagesize($_FILES["gambar_barang"]["tmp_name"]);
if($check === false) {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Allow only PNG and JPEG file formats
if($imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only PNG and JPEG files are allowed.";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["gambar_barang"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["gambar_barang"]["tmp_name"], $target_file)) {
        // Pastikan Anda sudah mengganti nama database, username, dan password sesuai dengan konfigurasi Anda
        include "../lala-main/koneksi.php";

        // Gunakan parameterized queries
        $stmt = $koneksi->prepare("INSERT INTO barang (nama_barang, jenis_barang, harga_barang, gambar_barang) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nama_barang, $jenis_barang, $harga_barang, basename($_FILES["gambar_barang"]["name"]));
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("location:tampil-barang.php?pesan=inputBerhasil");
        } else {
            echo "Error: " . $koneksi->error;
        }

        // Tutup statement dan koneksi
        $stmt->close();
        $koneksi->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
