<?php 
include "koneksi.php";
$TxtNama 	= $_REQUEST['TxtNama'];
$RbKelamin 	= $_POST['cbojk'];
$TxtUmur	= $_REQUEST['TxtUmur'];
$TxtAlamat 	= $_REQUEST['TxtAlamat'];
$NOIP = $_SERVER['REMOTE_ADDR'];
$email=$_POST['textemail'];
if (trim($TxtNama)=="") {
	include "add_pasien.php";
	echo "Nama belum diisi, ulangi kembali";
}
elseif (trim($TxtUmur)=="") {
	include "add_pasien.php";
	echo "Umur masih kosong, ulangi kembali";
}
elseif (trim($TxtAlamat)=="") {
	include "add_pasien.php";
	echo "Alamat masih kosong, ulangi kembali";
}
else {
    $NOIP = $_SERVER['REMOTE_ADDR'];

	//$sqldel = "DELETE FROM tmp_pasien WHERE noip='$NOIP'";	mysql_query($sqldel, $conn);
	
	$sql  = " INSERT INTO tb_pasien (nama,kelamin,umur,alamat,tanggal,email) 
		 	  VALUES ('$TxtNama','$RbKelamin','$TxtUmur','$TxtAlamat',NOW(),'$email')";
	mysqli_query($conn,$sql) or die ("SQL Error".mysqli_error());
	echo "<meta http-equiv='refresh' content='0; url=proses.php'>";
}
?>