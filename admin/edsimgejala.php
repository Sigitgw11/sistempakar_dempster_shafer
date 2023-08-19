<?php
include "../koneksi.php";
	$kdgejala = $_REQUEST['kdgejala2'];
	$gejala = $_REQUEST['gejala'];
	$sql = "UPDATE tb_gejala SET gejala='$gejala' WHERE kdgejala='$kdgejala'";
	$result=mysqli_query($conn,$sql)	or die ("SQL Error".mysqli_error());
	if($result){
		echo "<center><b>Data Telah Berhasil Diubah</b></center>";
		echo "<center><a href='gejala.php'>OK</a></center>";
		}else{
		echo"<table style='margin-top:150px;' align='center'><tr><td>";
		echo"<div style='width:500px; height:50px auto; border:1px dashed #CCC; padding:3px 3px 3px 3px;'>";
		echo "<center><font color='#ff0000'><strong>Data tidak dapat di Update..!</strong></font></center><br>";
		echo "<center><a href='gejala.php'>Kembali</a></center>";
		echo"</div>";
		echo"</td></tr></table>";
		}
?>