<!DOCTYPE html>
<html>
<head>
	<title>Output Perulangan</title>
</head>
<body>
<?php
	$nilaia=$_POST['nilai1'];
	$nilaib=$_POST['nilai2'];
	$r=$_POST['rumus']; 
?>
	 <h2>HASIL HITUNG RUMUS</h2>
	 Nilai a adalah = <?php echo "$nilaia"; ?> <br>
	 Nilai b adalah = <?php echo "$nilaib"; ?> <br>
<?php
	if ($nilaia=="0" && $nilaib=="0")
	{echo "Tidak ada hasil perhitungan";}
	else
	{
		if ($r=="s")
		{
			$hasil=(0.5*($nilaia*$nilaib));
			echo "Rumus yang dipilih adalah = Segitiga<br>
				Hasil perhitungan rumus = $hasil";
		}
		else
		{
			$hasil=($nilaia*$nilaib);
			echo "Rumus yang dipilih adalah = Persegi Panjang<br>
				Hasil perhitungan rumus adalah = $hasil";
		}
	}
?>
</body>
</html>