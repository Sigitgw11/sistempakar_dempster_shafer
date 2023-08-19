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
            <h2>Laporan Data Gejala Berdasarkan Penyakit</h2>
            <hr>
            <form name="form1" method="post" action="lapgejala2.php">
                <table width="100%" border="0" align="center" cellpadding="3" cellspacing="2">
                    <tr bgcolor="#808080" align="center">
                        <td colspan="2" align="center" style="color:#FFFFFF"><b>TAMPILKAN GEJALA PER PENYAKIT </b></td>
                    </tr>
                    <tr>
                        <td width="204" align="right"><b>Penyakit :</b></td>
                        <td width="305">
                            <select name="CmbPenyakit">
                                <option value="NULL">[ Daftar Penyakit ]</option>
                                <?php
$sqlp = "SELECT * FROM tb_penyakit ORDER BY kdpenyakit";
$qryp = mysqli_query($conn, $sqlp)
or die("SQL Error: " . mysqli_error());
while ($datap = mysqli_fetch_array($qryp)) {
    if ($datap['kdpenyakit'] == $kdsakit) {
        $cek = "selected";
    } else {
        $cek = "";
    }
    echo "<option value='$datap[id]' $cek>
			  $datap[nama_penyakit] ($datap[kdpenyakit])</option>";
}
?>
                            </select></td>
                    </tr>
                    <tr>
                        <td align="center">&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Tampil"></td>
                    </tr>
                </table>
            </form>
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