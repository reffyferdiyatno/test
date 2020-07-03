<!DOCTYPE html>
<html>
<head>
	<title>Company</title>
	<link rel="stylesheet" type="text/css" href="css1/style.css">
</head>
<body>
	<div class="box-form">
		<marquee><h3>Company</h3></marquee><hr><br>
		<center><img src="img/profil/CM.png"width="200" height="200"></center>
		<?php 
		if(isset($_GET['err1'])){
			echo '<div class="alert-error">Maaf, input nomor telepon harus angka</div>';
		}
		?>
		<form action="proses-daftar.php" method="post">
			Nama Lengkap :<br>
			<input type="text" name="nama" required/><br><br>
			No. Telepon :<br>
			<input type="text" name="telp" required/><br><br>
			Email :<br>
			<input type="email" name="email" required/><br><br>
			Alamat Lengkap :<br>
			<textarea name="alamat" rows="5" cols="50"></textarea><br></br><br></br>
			<center><input type="submit" name="daftar" value="Daftar"></center>
		</form>
	</div>	
</body>
</html>