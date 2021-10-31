<!DOCTYPE html>
<html>
<head>
	<title>DATA KOMENTAR</title>
</head>
<body>
<h1>DATA KOMENTAR ANDA</h1>
Nama 		: <?php echo $_POST["nama"]; ?><br>
Jenis Kelamin		:<?php echo $_POST ["gender"];
Email 		: <?php echo $_POST["email"]; ?><br>
Sebject		: <?php echo $_POST["subject"];
Pesan		: <?php echo $_POST["Komentar"]; ?><br>
<a href="forminputkomentar.php"> INPUT DATA LAGI </a>
</body>
</html>