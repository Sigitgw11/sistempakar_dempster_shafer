<?php
include "../koneksi.php";
$kdubah = $_GET['kdubah'];
if($kdubah !=""){
	#menampilkan data
	$sql = "SELECT * FROM tb_penyakit WHERE kdpenyakit='$kdubah'";
	$qry = mysqli_query ($conn,$sql)
			or die ("SQL ERROR".mysqli_error());
	$data = mysqli_fetch_array($qry);
	#samakan dengan variabel form
	$in_id_penyakit = $data['kdpenyakit'];
	$in_penyakit = $data['nama_penyakit'];
	$in_definisi = $data['definisi'];
	$in_solusi = $data['solusi'];
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
    <style>
<!--
body
{
background-image:url(file:/image/background.jpg);
background-repeat:no-repeat;
background-attachment:fixed;
}
</style> 
  </head>

  <body>
  <form id="form1" name="form1" method="post" action="edsimpenyakit.php">
<table width="509" border="0" align="center">
  <tr>
    <td height="22" colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="39" colspan="3" valign="top"><div align="center">
      <div align="center"><span class="style38"><strong> Edit penyakit </strong></span></div></td>
    </tr>
  <tr>
    <td width="160" valign="top"><span class="style35">Kd Penyakit</span></td>
    <td width="9">&nbsp;</td>
    <td width="326" valign="top">
      <label>
      <input type="text" size="1" value="<?php echo $in_id_penyakit;?>" disabled="disabled">
        <input name="kdpenyakit" type="hidden" id="kdpenyakit" value="<?php echo $in_id_penyakit;?>">
        </label>    </td>
  </tr>
  <tr>
    <td valign="top">Penyakit</td>
    <td>&nbsp;</td>
    <td valign="top">
      <label>
        <textarea name="in_penyakit" id="in_penyakit" cols="45" rows="5"><?php echo $in_penyakit;?></textarea>
        </label>  </td>
  </tr>
  <tr>
    <td valign="top">Definisi</td>
    <td>&nbsp;</td>
    <td valign="top">
      <label>
        <textarea name="in_definisi" id="in_definisi" cols="45" rows="5"><?php echo $in_definisi;?></textarea>
        </label>  </td>
  </tr>
  <tr>
    <td valign="top">Solusi</td>
    <td>&nbsp;</td>
    <td valign="top">
      <label>
        <textarea name="in_solusi" id="in_solusi" cols="45" rows="5"><?php echo $in_solusi;?></textarea>
        </label>  </td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><input type="submit" name="simpan" id="simpan" value="Update" />
     <a href="penyakit_solusi.php"><input type="button" name="batal" id="batal" value="Batal" /></a></td>
      </a></td>
  </tr>
  <tr>
    <td valign="top"><span class="style36"></span></td>
    <td>&nbsp;</td>
    <td valign="top">
      <label></label>
      <label></label></td>
  </tr>
</table>
</form>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
