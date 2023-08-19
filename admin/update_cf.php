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
    <?php
include "../koneksi.php";
$kd_gejala = $_GET['id_evidence'];
$kd_penyakit = $_GET['id_problem'];
$cf = $_POST['txtCF'];
// jika data nol maka simpan data
$perintah = "UPDATE tb_rules SET cf='$cf' WHERE id_evidence='$kd_gejala' AND id_problem='$kd_penyakit' ";
//$perintah2=mysql_query("UPDATE tbrule SET md='$NilaiMD' WHERE kd_gejala='$kd_gejala' ");
$berhasil = mysqli_query($conn, $perintah) or die(" Data tidak masuk database / data telah ada " . mysqli_error());
if ($berhasil) {
    echo "<center><b>Data Berhasil Disimpan </b></center>";
    echo "<center><a href='rule_algoritma.php'>OK</a></center>";
} else {
    echo "<center><font color='#ff0000'><strong>Penyimpanan Gagal</strong></font></center><br>";
    echo "<center><a href='rule_algoritma.php'>Kembali</a></center>";
}

?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>