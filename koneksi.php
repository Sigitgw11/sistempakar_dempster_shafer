<?php
$host="localhost";
$user="root";
$pass="";
$dbName="db_diagnosa";
$conn=mysqli_connect($host,$user,$pass);
$db=mysqli_select_db($conn,$dbName)or die("<center color='red'><strong>" .mysqli_error()."</strong></center>"
."<center><font color='red'><strong>Koneksi Gagal...! karena database tidak ada</strong></font></center><center><p align='center'>Informasi Pemesanan database : </p>
"
);
if(!$conn){
	echo"<center><font color='red'><strong>Koneksi Gagal...!</strong></font></center>";
	echo"<center><font color='red'><strong>DATABASE $dbName tidak ditemukan...!</strong></font></center>";
	}
?>