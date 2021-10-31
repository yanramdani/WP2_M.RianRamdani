<!DOCTYPE html>
<html>
<head>
	<title>Komentar Output</title>
	<style type="text/css">
		body{
			background-image: url(Abstract_54158486.jpg);
			background-size: 100%;
			right: 95%;
			width: 99%;
		}
	</style>
</head>
<body>
	<font size="5" color="white" face="Rockwell">
<p><h1>Data Komentar Anda</h1>
Nama		: <?php echo $_POST["nama"]; ?><br>
Jenis Kelamin		:<?php echo $_POST ["gender"]; ?><br>
Email 		: <?php echo $_POST["email"]; ?><br>
Sebject		: <?php echo $_POST["Subject"]; ?><br>
Pesan		: <?php echo $_POST["Komentar"]; ?><br>
<table border="0" bgcolor="white" width="17%">
		<td><font size="5" color="black"><a href="komentar_input.php"> INPUT DATA LAGI </a></font></td>
</p>
</table>
</font>
</body>
</html>