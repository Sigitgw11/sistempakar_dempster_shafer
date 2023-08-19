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
$kdgejala = $_POST['kdgejala'];
$gejala = $_POST['gejala'];
$sqlrs = mysqli_query($conn, "SELECT kdgejala FROM tb_gejala WHERE kdgejala='$kdgejala'");
$rs = mysqli_num_rows($sqlrs);
if ($rs == 0) {
    // jika data nol maka simpan data
    $perintah = "INSERT INTO tb_gejala (kdgejala,gejala) VALUES ('$kdgejala','$gejala')";
    $berhasil = mysqli_query($conn, $perintah) or die(" Data tidak masuk database / data telah ada " . mysqli_error());
    if ($berhasil) {
        echo "<center><b>Data Berhasil Disimpan </b></center>";
        echo "<center><a href='gejala.php'>Ok</a></center>";
    } else {
        echo "<center><font color='#ff0000'><strong>Penyimpanan Gagal</strong></font></center><br>";
        echo "<center><a href='gejala.php'>Kembali</a></center>";
    }
} else {
    // cek jika data sudah ada
    echo "<table style='margin-top:150px;' align='center'><tr><td>";
    echo "<div style='width:500px; height:50px auto; border:1px dashed #CCC; color:#F90; padding:3px 3px 3px 3px;'>";
    echo "<center><font>Kode Gejala $kdgejala <strong>Telah ada di database, Masukkan Kode Unik..!</strong></font></center><br>";
    echo "<center><a href='gejala.php'>Kembali</a></center>";
    echo "</div>";
    echo "</td></tr></table>";
}
?>