<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../lala-main/login.php");
  }
?>
<?php

$id=$_GET['id'];

include "../lala-main/koneksi.php";

$hapus=$koneksi->query("delete from user where user_id='$id'");

if($hapus==true){

    header("location:tampil-user.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>