<!DOCTYPE html>
<html>
<head>
	<title>Form Komentar</title>
</head>
<body>
<h1>BUKU TAMU</h1><br>
<p>Komentar dan Saran Anda Sangat Kami Butuhkan<br>
Untuk Meningkatkan Kualitas Situs Kami<br></p>
<p><form action="tampilankomentar.php" method="POST">
<pre>
Nama 		 : <input type="text" name="nama" size="30">
Jenis Kelamin: <input type="radio" name="gender" value="Laki-Laki">Laki-Laki <input type="radio" name="gender" value="Perempuan">Perempuan
Email 		 : <input type="text" name="email" size="30">
Pesan		 : <textarea rows="5" cols="45" name="Komentar"></textarea><br>
<input type="submit" value="kirim"><input type="reset" name="batal">		
</form></p>

</body>
</html>