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
    $(document).ready(function() {
        $("#kdpenyakit").focus();
    })

    function validasi(form) {
        if (form.kdpenyakit.value == "") {
            alert("Masukkan Kode Penyakit..!");
            form.kdpenyakit.focus();
            return false;
        } else if (form.nama_penyakit.value == "") {
            alert("Masukkan Nama Penyakit..!");
            form.nama_penyakit.focus();
            return false;
        } else if (form.definisi.value == "") {
            alert("Masukkan Definisi Penyakit..!");
            form.definisi.focus();
            return false;
        } else if (form.solusi.value == "") {
            alert("Masukkan Solusi Penyakit..!");
            form.solusi.focus();
            return false
        }
    }

    function konfirmasi(kdpenyakit) {
        var kd_hapus = kdpenyakit;
        var url_str;
        url_str = "hpspenyakit.php?kdhapus=" + kd_hapus;
        var r = confirm("Yakin ingin menghapus data..?" + kd_hapus);
        if (r == true) {
            window.location = url_str;
        } else {
            //alert("no");
        }
    }
    //expande text
    $(function() {
        $('.text').truncatable({
            limit: 100,
            more: '[<strong style="color:red;">&raquo;&raquo;&raquo;</strong>]',
            less: true,
            hideText: '[<strong>&laquo;&laquo;&laquo;</strong>]'
        });
    });
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
        <div class="jumbotron">
            <h2>Data Penyakit dan Solusi Penanganannya</h2>
            <hr>
            <form name="form3" method="post" onSubmit="return validasi(this);" action="simpanpenyakit.php">
                <table class="tab" width="667" border="0" cellpadding="2" cellspacing="1" align="center">
                    <tr>
                        <td width="88">Kode Penyakit </td>
                        <td width="10">:</td>
                        <td width="180">
                            <input name="kdpenyakit" type="text" id="kdpenyakit" size="4" maxlength="4">
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>Nama Penyakit</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama_penyakit" id="nama_penyakit" size="30" maxlength="30">
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>Definisi</td>
                        <td>:</td>
                        <td>
                            <textarea name="definisi" id="definisi" rows="2" cols="70"></textarea>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>Solusi</td>
                        <td>:</td>
                        <td><textarea name="solusi" id="solusi" rows="2" cols="70"></textarea></td>
                    </tr>
                    <tr>
                        <td height="23">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            <input name="simpan" type="Submit" id="simpan" value="Simpan">
                            <input type="submit" name="Submit" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
            <br>
            <div class="CSSTableGenerator">
                <table id="tabel" width="100%" cellpadding="3" cellspacing="0" border="1" align="center">
                    <tr valign="top" bgcolor="#808080" align="center" style="color:#FFFFFF">
                        <td width="108"><strong>No.</strong></td>
                        <td width="108"><strong>Kode Penyakit </strong></td>
                        <td width="150"><strong>Nama Penyakit</strong></td>
                        <td width="250"><strong>Definisi</strong></td>
                        <td width="256"><strong>Solusi</strong></td>
                        <td width="48"><strong>Edit</strong></td>
                        <td width="53"><strong>Hapus</strong></td>
                    </tr>
                    <?php
//include "inc.connect/connect.php";
//include "../librari/inc.koneksidb.php";
include "../koneksi.php";
$sql = "SELECT * FROM tb_penyakit  ORDER BY kdpenyakit";
$qry = mysqli_query($conn, $sql) or die("SQL Error" . mysqli_error());
$no = 0;
while ($data = mysqli_fetch_array($qry)) {
    $no++;
    ?>
                    <tr valign="baseline">
                        <td><?php echo $no; ?> </td>
                        <td><?php echo $data['kdpenyakit']; ?></td>
                        <td><?php echo $data['nama_penyakit']; ?></td>
                        <td>
                            <h4 style="text-align:justify;">
                                <?php
$str = $data['definisi'];
    $teks = substr($str, 0, 150);
    echo $str;
    ?>
                            </h4>
                        </td>
                        <td>
                            <h4 style="text-align:justify;">
                                <?php
$str = $data['solusi'];
    $teks = substr($str, 0, 150);
    echo $str;
    ?>
                            </h4>
                        </td>
                        <td><a title="Edit Penyakit"
                                href="edpenyakit.php?kdubah=<?php echo $data['kdpenyakit']; ?>"><img
                                    src="image/edit.PNG" width="16" height="16" border="0"></a></td>
                        <td><a title="Hapus Penyakit" style="cursor:pointer;"
                                onclick="return konfirmasi('<?php echo $data['kdpenyakit']; ?>');"><img
                                    src="image/hapus.PNG" width="16" height="16"></a>
                        </td>
                    </tr>
                    <?php
}?>
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