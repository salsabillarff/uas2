<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../lala-main/login.php");
  }

  // Check if the form is submitted
  if (isset($_POST['kirim'])) {
    // Get values from the form
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $harga_barang = $_POST['harga_barang'];

    // Handle image upload
    $target_dir = "image/";  // Set your upload directory
    $target_file = $target_dir . basename($_FILES["gambar_barang"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["kirim"])) {
        $check = getimagesize($_FILES["gambar_barang"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
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

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["gambar_barang"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["gambar_barang"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-barang.php" method="POST" enctype="multipart/form-data">
                <?php
                $id=$_GET['id'];
                include "../lala-main/koneksi.php";
                $tampil=$koneksi->query("select * from barang where id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group" style="margin-top:8rem;" hidden>
                        <label for="nama">ID</label>
                        <input type="text" name="id" value="<?php echo $row['id']?>" class="form-control">
                    </div>      
                    <div class="form-group" style="margin-top:8rem;">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" name="jenis_barang" value="<?php echo $row['jenis_barang']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang</label>
                        <input type="number" name="harga_barang" id="harga_barang" value="<?php echo $row['harga_barang']?>" class="form-control" oninput="calculateTotal()">
                    </div>
                    <div class="form-group">
                        <label for="gambar_barang">Gambar Barang</label>
                        <input type="file" name="gambar_barang" class="form-control">
                    </div>

                    <!-- Other form fields -->

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>
