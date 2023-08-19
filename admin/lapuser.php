<?php
//include "inc.connect/connect.php";
include "../koneksi.php";
//$kdsakit = $_REQUEST['kdsakit'];
?>
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
    <link rel="stylesheet" type="text/css" href="../style.css">

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    function konfirmasi(id_user) {
        var kd_hapus = id_user;
        var url_str;
        url_str = "hapus_user.php?id_user=" + kd_hapus;
        var r = confirm("Yakin ingin menghapus data..?" + kd_hapus);
        if (r == true) {
            window.location = url_str;
        } else {
            //alert("no");
        }
    }
    </script>
</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar smart-scroll navbar-inverse navbar-fixed-top">
        <div class="teksgambar">
            <h1> Aplikasi Diagnosa Gangguan Mental</h1>
            <h2> Metode Dempster Shafer</h2>
        </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="admin.php">Home</a></li>
                    <li><a href="penyakit_solusi.php">Penyakit & Solusi</a></li>
                    <li><a href="gejala.php">Gejala</a></li>
                    <li><a href="rule_algoritma.php">Rule Dempster Shafer</a></li>
                    <li><a href="lapgejala.php">Laporan Gejala</a></li>
                    <li><a href="lapuser.php">Laporan Pengguna</a></li>
                    <li><a href="logout.php" onclick="return confirm('Yakin Ingin Keluar?')">Logout</a></li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h2>Laporan Data Pasien</h2>
            <div class="CSSTableGenerator">
                <table width="100%" border="1" cellpadding="2" cellspacing="1" bgcolor="#22B5DD">
                    <tr bordercolor="" bgcolor="#CCCCCC">
                        <td width="29">
                            <div align="center"><strong>No</strong></div>
                        </td>
                        <td width="147">
                            <div align="center"><b>Nama</b></div>
                        </td>
                        <td width="74">
                            <div align="center"><strong>Kelamin</strong></div>
                        </td>
                        <td width="73" align="center">
                            <div align="center"><strong>Umur</strong></div>
                        </td>
                        <td width="166" align="center">
                            <div align="center"><strong>Alamat</strong></div>
                        </td>
                        <td width="235" align="center">
                            <div align="center"><strong>Penyakit Yang diderita </strong></div>
                        </td>
                        <td width="150" align="center"><strong>Tanggal Diagnosa</strong> </td>
                    </tr>
                    <?php
include "../koneksi.php";
$arrPenyakit = array();
$queryP = mysqli_query($conn, "SELECT * FROM tb_penyakit");while ($dataP = mysqli_fetch_array($queryP)) {$arrPenyakit["$dataP[kdpenyakit]"] = $dataP['nama_penyakit'];}
$sql = "SELECT * FROM tb_pasien,tb_hasil WHERE tb_hasil.idpasien=tb_pasien.idpasien group by tb_hasil.idpasien  ORDER BY tb_hasil.idhasil DESC";
//$sql="SELECT * FROM analisa_hasil";
$qry = mysqli_query($conn, $sql) or die("SQL Error" . mysqli_error());
$no = 0;
while ($data = mysqli_fetch_array($qry)) {
    $no++;
    ?>
                    <tr bgcolor="#FFFFFF">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['kelamin']; ?></td>
                        <td><?php echo $data['umur']; ?></td>
                        <td><?php echo $data['alamat'] . "<br>" . $data['email']; ?></td>
                        <td><?php $idp = $data['idpasien'];
    $strP = mysqli_query($conn, "SELECT * FROM tb_hasil WHERE idpasien='$idp' ");
    while ($dataP = mysqli_fetch_array($strP)) {
        echo $dataP['kdpenyakit'] . " | ";
        print_r($arrPenyakit["$dataP[kdpenyakit]"]);
        echo " = " . $dataP['persentase'] . "%<br>";
    }
    ?></td>
                        <td><?php echo $data['tanggal']; ?>&nbsp;|<a title="hapus pengguna" style="cursor:pointer;"
                                onClick="return konfirmasi('<?php echo $data['idpasien']; ?>')"><img
                                    src="image/hapus.PNG" width="16" height="16"></a></td>
                    </tr>
                    <?php
}
?>
                </table>
            </div>
        </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="../scroll.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>