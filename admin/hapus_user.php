<html>

<head>
    <title>Diagnosa Gangguan Mental</title>
</head>

<body>
    <div>
        <?php
include "../koneksi.php";
$id_user=$_GET['id_user'];
$query=mysqli_query($conn,"DELETE FROM tb_hasil WHERE idpasien='$id_user'")or die(mysqli_error());
if($query){
	echo "<center><b>Data Berhasil Dihapus..!</b></font></center>";
	echo "<center><a href='lapuser.php'>OK</a></center>";
	}else{
		echo "<center><font color='#ff0000'><strong>Data Tidak dapat dihapus</strong></font></center>";
		echo "<center><a href='lapuser.php'>Kembali</a></center>";
		}
?>
    </div>
</body>

</html>