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
    function validasi(form) {
        if (form.kdgejala.value == "") {
            alert("Masukkan kode gejala..!");
            form.kdgejala.focus();
            return false;
        } else if (form.gejala.value == "") {
            alert("Masukkan gejala..!");
            form.gejala.focus();
            return false;
        }
        form.submit();
    }

    function konfirmasi(kdgejala) {
        var kd_hapus = kdgejala;
        var url_str;
        url_str = "hpsgejala.php?kdhapus=" + kd_hapus;
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
        <div class="jumbotron">
            <!-- Main component for a primary marketing message or call to action -->
            <h2>Data Gejala-gejala</h2>
            <form name="form3" onSubmit="return validasi(this);" method="post" action="simpangejala.php">
                <table class="tab" width="477" border="0" align="center">
                    <tr>
                        <td colspan="3">
                            <div align="center"></div>
                        </td>
                    </tr>
                    <tr>
                        <td width="95">Kode gejala </td>
                        <td width="8">:</td>
                        <td width="224">
                            <input name="kdgejala" type="text" id="kdgejala" size="4" maxlength="4">
                        </td>
                    </tr>
                    <tr>
                        <td> Gejala </td>
                        <td>:</td>
                        <td>
                            <textarea name="gejala" rows="2" cols="40" id="gejala"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            <input name="simpan" type="submit" id="simpan" value="Simpan">
                            <input type="reset" name="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
            <div class="CSSTableGenerator">
                <table width="100%" border="1" align="center" cellpadding="3" cellspacing="0">
                    <tr bgcolor="#808080" align="center" style="color:#FFFFFF">
                        <td width="85"><strong>Kode Gejala</strong></td>
                        <td width="505"><strong>Gejala</strong></td>
                        <td width="50"><strong>Edit</strong></td>
                        <td width="50"><strong>Hapus</strong></td>
                    </tr>
                    <tr>
                        <?php
	//include("inc.connect/connect.php");
	include "../koneksi.php";
	$sql = "SELECT * FROM tb_gejala ORDER BY id ASC ";
	$qry = mysqli_query($conn,$sql) or die ("SQL Error".mysqli_error());
	$no=0;
	while ($data = mysqli_fetch_array ($qry)) {
	$no++;
   ?>

                    <tr bgcolor="#FFFFFF" bordercolor="#333333">
                        <td><?php echo $data['kdgejala']; ?></td>
                        <td><?php echo $data['gejala']; ?></td>
                        <td><a title="Edit Penyakit" href="edgejala.php?kdubah=<?php echo $data['kdgejala'];?>"><img
                                    src="image/edit.PNG" width="16" height="16" border="0"></a></td>
                        <td><a title="Hapus Gejala" style="cursor:pointer;"
                                onclick="return konfirmasi('<?php echo $data['kdgejala'];?>');"><img
                                    src="image/hapus.PNG" width="16" height="16"></a></td>
                    </tr>
                    <?php
  } ?>
                </table>
            </div>
            <p>&nbsp; </p>
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