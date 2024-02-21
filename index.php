<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../lala-main/login.php");
  }
?>
<?php include "header.php"; ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<br><h2>SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h2>
						<p>Ini adalah website yang ditujukan kepada admin yang mengelola ShV shop ya,buka untuk umum.<br> tolong di pergunakan dengan bijak ,okeeee. pliss deh </p>
						<p><a class="btn btn-warning btn-lg" href="tampil-keranjang.php" role="button">Keranjang</a>
                            <a class="btn btn-success btn-lg" href="tampil-checkout.php" role="button">List Checkout</a>                            
                            
                            <a class="btn btn-info btn-lg" href="tampil-barang.php" role="button">Barang</a>
						<a class="btn btn-danger btn-lg" href="tampil-user.php"role="button">User</a></p>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->	
	<?php include"footer.php"; ?>