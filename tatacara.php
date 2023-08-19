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

            </div>
            <div id="navbar" class="navbar-collapse collapse">
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
            <p style='text-align: center'><b>TATA CARA KONSULTASI</b></p>
            <p>Diagnosis adalah kunci dari pengobatan maka dari itu aplikasi ini membantu para pengguna untuk melakukan
                self-diagnosa atau diagnosa awalan secara mandiri sebelum nantinya berkonsultasi langsung dengan dokter
                atau pakar:</p>
            <p><br>Adapun tatacara melakukan konsutasi sebagai berikut:</p>
            <ul>
                <li>- User mengklik menu Konsultasi</li>
                <li>- User melakukan Registrasi dengan memasukan data diri .</li>
                <li>- User memilih sub-sub gejala yang ada sesuai yang dialami.</li>
                <li>- User lanjut mengKlik Button proses diagnosa.</li>
                <li>- Sistem akan menghasilkan hasil diagnosa sesuai gejala yang dialami.</li>
            </ul>
            <P>Aplikasi ini ditujukan untuk Membantu pengguna sebagai alat untuk mendiagnosa penyakit gangguan mental
                dan
                memberikan solusi apa yag harus dilakukan dan sebagai pemeberi informasi bagi masyarakat awam.</P>
        </div>
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