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
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="navbar-fixed-top.css">

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
    <?php include "koneksi.php"; ?>

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

                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="daftar_penyakit.php">Daftar Penyakit</a></li>
                    <li><a href="tatacara.php">Tata Cara</a></li>
                    <li><a href="add_pasien.php">Konsultasi</a></li>
                    <li><a target="_blank" href="admin/index.php">Login</a></li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div>
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <h3>SELAMAT DATANG DI SISTEM PAKAR DIAGNOSA PENYAKIT GANGGUAN MENTAL<div>
                            </h3>
                            <p><strong>Sistem Pakar Diagnosa Penyakit Gangguan Mental, merupakan sistem pakar untuk
                                    membantu memberikan Informasi dini mengenali gejala-gejala penyakit pada mental
                                    seseorang</strong></p>
                            <p style="font-family:'Verdana', Courier, monospace; color:#336; text-align:justify"><img
                                    src="image/mental.PNG" width="350" height="350" style="float:right; " />
                                Penyakit gangguan mental adalah suatu gangguan pola pikir,emosi dan perilaku manusia
                                yang menyimpang pada masyarakat umum .Secara umum penderitanya memiliki keadan
                                fisik yang normal akan tetapi kedaan psikis atau kejiwaannya yang terganggu yang
                                menyebabkan penderita tidak dapat melakukan kegiatan yang produktif.Indonesia merupakan
                                salah satu negara yang memliki kasus gangguan jiwa sebesar 9.162.886 penderita depresi
                                atau 3,7% dari populasi.Umumnya gejala ganguan mental awalnya beragam mulai dari:<br />

                                <p>* Banyaknya masalah dalam kehidupan.</p>
                                <p>* Trauma</p>
                                <p>* Mengalami diskriminasi dan stigma </p>
                                <p>* dan beberapa gejala yang tidak disadari lainnya</p>
                                <p style="font-family:'Verdana', Courier, monospace; color:#336; text-align:justify">

                                    Tergantung pada penyebab yang mendasarinya, beberapa jenis penyakit gangguan mental
                                    dapat diobati. Namun, sering kali, penyakit gangguan mental yang sudah akut tidak
                                    dapat
                                    disembuhkan amaka dari itu perlunya penanganan secar dini. Secara umum, pengobatan
                                    terdiri dari langkah-langkah terapi, menkonsumsi obat-obatan dan perubahan gaya
                                    hidup.
                                </p>
                                </blockquote>
                                </blockquote>
            </div>
            </td>
            </tr>
            </table>
        </div>
        <div class="cleared"></div>
        <div class="cleared"></div>
    </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="scroll.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>