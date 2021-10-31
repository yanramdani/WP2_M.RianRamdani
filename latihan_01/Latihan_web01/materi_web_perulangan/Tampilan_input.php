<!DOCTYPE html>
<html>
<head>
	<title>Input Perulangan</title>
</head>
<body>
	<center>
		<h2>Rumus-Rumus</h2>
		<form action="Tampilan_output.php" method="POST">
		<table border="1">
		<tr>
			<td>Nilai 1</td>
			<td><input type="text" name="nilai1"></td>
		</tr>
		<tr>
			<td>nilai 2</td>
			<td><input type="text" name="nilai2"></td>
		</tr>
		<tr align="center">
			<td colspan="2">
			<input type="radio" name="rumus" value="s">Segitiga<br>
			<input type="radio" name="rumus" value="pp">Persegi Panjang
			</td>
		</tr>
		</table>
		<input type="submit" value="Hitung"><input type="reset" value="Batal">
		</form>
	</center>

</body>
</html>