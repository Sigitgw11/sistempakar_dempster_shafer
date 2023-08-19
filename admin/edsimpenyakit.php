<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Diagnosa Gangguan Mental</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
<!--
body
{
background-image:url(/image/background.jpg);
background-repeat:no-repeat;
background-attachment:fixed;
}
</style>
  </head>

  <body>
  </body>
</html>
<?php
include "../koneksi.php" ;
$kdpenyakit=$_POST['kdpenyakit'];
$penyakit=$_POST['in_penyakit'];
$definisi=$_POST['in_definisi'];
$solusi =$_POST['in_solusi'];
$sql = "UPDATE tb_penyakit SET nama_penyakit='$penyakit',definisi='$definisi', solusi='$solusi' WHERE kdpenyakit='$kdpenyakit'";
$result=mysqli_query($conn,$sql)or die ("SQL Error".mysqli_error());
if($result){
		echo "<center><b>Data Telah Berhasil Diubah</b></center>";
		echo "<center><a href='penyakit_solusi.php'>OK</a></center>";
	}else{
		echo "<center><font color='#ff0000'><strong>Error update</strong></font></center>";
		echo "<center><a href='penyakit_solusi.php'>Kembali</a></center>";
		}
?>