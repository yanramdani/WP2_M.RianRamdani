<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
</head>
<body>
<?php
//konstanta untuk judul
define("Judul", "Menghitung Luas dan Volume Tabung<br>");
//konstanta untuk phi
define("PHI", 3.14);
echo Judul;
$r=7;
$t=28;
echo "<br>Diketahui : <br>";
echo "Jari-jari tutup/Alas Tabung=$r<br>";
echo "Tinggi Tabung=$t<br>";
//Hitung volume
echo "<br>Mencari Volume<br>";
$Volume=PHI*$r**2*$t;
echo "Volume Tabung=$Volume<br>";
echo"<br>Mencari Luas Permukaan<br>";
$Lp=2*PHI*$r*($r+$t);
echo"Keliling Alas=$Lp<br>";
echo"<br>Mencari Luas Selimut<br>";
$Ls=2*PHI*$r*$t;
echo"Keliling Alas=$Ls<br>";
echo"<br>Mencari Luas Alas<br>";
$La=PHI*$r**2;
echo"Luas=$La<br>";
?>
</body>
</html>