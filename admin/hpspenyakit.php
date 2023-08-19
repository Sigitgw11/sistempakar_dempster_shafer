<html>

<head>
    <title>Diagnosa Gangguan Mental</title>

<body>
</body>
</head>

</html>
<?php
include "../koneksi.php";
$kdhapus = $_GET['kdhapus'];
//$isipertanyaan = $_GET['pertanyaan'];
if ($kdhapus  !="") {
	$sql = "DELETE FROM tb_penyakit WHERE kdpenyakit='$kdhapus'";
	mysqli_query($conn,$sql) or die ("SQL Error". mysqli_error());
	echo "<center><b>Data berhasil dihapus</b></center>";
	echo "<center><a href='penyakit_solusi.php'><b>OK</b></a></center>";
	//include "index.php?top=gejala.php";
	}else{
	echo "<center>Data belum berhasil dihapus</center>";
	echo "<center><a href='penyakit_solusi.php'><b>Kembali</b></a></center>";
}
?>