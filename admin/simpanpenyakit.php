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
</head>

<body>
</body>

</html>
<?php
//include "inc.connect/connect.php";
include "../koneksi.php";
$kdpenyakit = $_POST['kdpenyakit'];
$nama_penyakit = $_POST['nama_penyakit'];
$definisi = $_POST['definisi'];
$solusi = $_POST['solusi'];
//cek keberadaan data
$sqlrs = mysqli_query($conn, "SELECT kdpenyakit FROM tb_penyakit WHERE kdpenyakit='$kdpenyakit'");
$rs = mysqli_num_rows($sqlrs);
if ($rs == 0) {
    $perintah = "INSERT INTO tb_penyakit(kdpenyakit,nama_penyakit,definisi,solusi)VALUES('$kdpenyakit','$nama_penyakit','$definisi','$solusi')";
    $berhasil = mysqli_query($conn, $perintah);
    //jika data berhasil disimpan
    if ($berhasil) {
        echo "<center><b>Penyimpanan Berhasil </b></center><br>";
        echo "<center><a href='penyakit_solusi.php'>OK</a></center>";
    } else {
        echo "<center><font color='#ff0000'><strong>Penyimpanan Gagal</strong></font></center><br>";
        echo "<center><a href='penyakit_solusi.php'>Kembali</a></center>";
    }
} else {
    echo "<table style='margin-top:150px;' align='center'><tr><td>";
    echo "<div style='width:500px; height:50px auto; border:1px dashed #CCC; color:#F90; padding:3px 3px 3px 3px;'>";
    echo "<center><font>Kode Gejala $kdpenyakit <strong>Telah ada di database, Masukkan Kode Unik..!</strong></font></center><br>";
    echo "<center><a href='penyakit_solusi.php'>Kembali</a></center>";
    echo "</div>";
    echo "</td></tr></table>";
}
?>