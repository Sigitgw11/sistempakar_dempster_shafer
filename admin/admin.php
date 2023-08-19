<?php 
session_start();
if(!isset($_SESSION['log'])){
  header('location: index.php');
  exit;
}
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
            <h2>Dashboard Administrator</h2>
            <div class="CSSTableGenerator">
                <table width="200" border="1" align="Left">
                    <tr>
                        <td bgcolor="#808080" align="center" valign="bottom"><strong><span class="t">MENU
                                </span></strong></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" bordercolor="#333333">
                        <td align="center" valign="bottom"><strong><a href="penyakit_solusi.php"><span
                                        class="t">Penyakit & Solusi </span></a></strong></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" bordercolor="#333333">
                        <td align="center" valign="bottom"><strong><a href="gejala.php"><span
                                        class="t">Gejala</span></a></strong></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" bordercolor="#333333">
                        <td align="center" valign="bottom"><strong><a href="rule_algoritma.php"><span class="t">Rule
                                        Dempster Shafer</span></a></strong></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" bordercolor="#333333">
                        <td align="center" valign="bottom"><strong><a href="lapgejala.php"><span class="t">Laporan
                                        Gejala</span></a></strong></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" bordercolor="#333333">
                        <td align="center" valign="bottom"><strong><a href="lapuser.php"><span class="t">Laporan
                                        User</span></a></strong></td>
                    </tr>
                </table>
                <h3 align="center">SELAMAT DATANG ADMIN DI SISTEM PAKAR DIAGNOSA PENYAKIT GANGGUAN MENTAL<div>
                </h3>

            </div>
            <table width="100%" height="25" align="center">
            </table>
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