<!DOCTYPE html>
<html>
<head>
	<title>Komentar Input</title>
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
<font face="Rockwell" size="10" color="white"><p align="center">Komentar</font>
	<table align="center" border="0" bgcolor="white" width="100%">
		<td><font size="5" color="black"><a href="home.php">HOME</a></font></td>
	</table>
<p><form action="komentar_output.php" method="POST">
<pre>
	<font size="5" color="white" face="Rockwell">
		<p>Masukan Komentar anda</p>
Nama 			: <input type="text" name="nama" size="30"><br>
Jenis Kelamin	: <input type="radio" name="gender" value="Laki-Laki">Laki-Laki <input type="radio" name="gender" value="Perempuan">Perempuan<br>
Email 			: <input type="text" name="email" size="30"><br>
Subject			: <input type="text" name="Subject" size="30" ><br>
Pesan			: <textarea rows="5" cols="45" name="Komentar"></textarea><br>
<input type="submit" value="kirim"><input type="reset" name="batal">		
</form></p>
</font>
</body>
</html>