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
    <h2>Data Nilai | Basis Pengetahuan</h2>
    <hr>
    <div class="konten">
        <?php
include "../koneksi.php";
$kd_gejala=$_GET['id_evidence'];
$kdpenyakit=$_GET['id_problem']; $queryP=mysqli_query($conn,"SELECT * FROM tb_penyakit WHERE id='$kdpenyakit' "); $dataP=mysqli_fetch_array($queryP); echo $dataP['kdpenyakit']."|".$dataP['nama_penyakit'];
?>
        <form id="form1" name="form1" method="post"
            action="update_cf.php?id_problem=<?php echo $_GET['id_problem'];?>&id_evidence=<?php echo $_GET['id_evidence'];?>"
            enctype="multipart/form-data">
            <div>

            </div>

            <table width="700" border="1" cellpadding="4" cellspacing="1" bordercolor="#000000">
                <tr style="background:#808080; color:#FFFFFF">
                    <td width="61"><strong>KD Gejala</strong></td>
                    <td width="725"><strong>Nama Gejala</strong><span
                            style="float:right; margin-right:25px;"><strong></strong></span></td>
                    <td width="88" align="center">CF</td>
                    <td width="88" align="center">Action</td>
                </tr>
                <?php
    $query=mysqli_query($conn," SELECT * FROM tb_gejala WHERE id='$_GET[id_evidence]' ")or die(mysqli_error());
	while($row=mysqli_fetch_array($query)){
	?>
                <tr bgcolor="#FFFFFF" bordercolor="#333333">
                    <td valign="top"><?php echo $row['kdgejala'];?></td>
                    <td><?php echo $row['gejala'];?>
                    <td style="background:#808080"><input name="txtCF" type="text" size="2"
                            value="<?php echo $_GET['cf'];?>"></td>
                    <td style="background:#808080"><input type="submit" value="Update Nilai"></td>
                </tr>
                <?php } ?>
            </table>
        </form>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>