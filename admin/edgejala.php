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
    <script type="text/javascript">
    function validasi(form) {
        if (form.gejala.value == "") {
            alert("Masukkan Gejala..!");
            form.gejala.focus();
            return false;
        }
        form.submit();
    }
    </script>
</head>

<body>
    <?php
include "../koneksi.php";
$kdubah = $_REQUEST['kdubah'];
if($kdubah !="") {
	#menampilkan data
	$sql = "SELECT * FROM tb_gejala WHERE kdgejala='$kdubah'";
	$qry = mysqli_query ($conn,$sql)
			or die ("SQL ERROR".mysqli_error());
	$data = mysqli_fetch_array($qry);
	
	#samakan dengan variabel form
	$kdgejala = $data['kdgejala'];
	$gejala = $data['gejala'];
}
?>
    <form id="form1" name="form1" onSubmit="return validasi(this);" method="post" action="edsimgejala.php"
        target="_self">
        <table style="border:1px solid #CCC; margin-top:150px;" width="509" border="0" cellpadding="3" cellspacing="0"
            align="center">
            <tr>
                <td height="22" colspan="3" valign="top">&nbsp;</td>
            </tr>
            <tr>
                <td height="39" colspan="3" valign="top">
                    <div align="center"><span class="style38"><strong>Edit Gejala </strong></span></div>
                </td>
            </tr>
            <tr>
                <td width="160" valign="top"><span class="style35">Kode Gejala</span></td>
                <td width="9">:</td>
                <td width="326" valign="top">
                    <label>
                        <input name="kdgejala" type="text" id="kdgejala" size="1" value="<?php echo $kdgejala; ?>"
                            disabled="disabled">
                        <input name="kdgejala2" type="hidden" id="kdgejala2" value="<?php echo "$kdgejala"; ?>">
                    </label> </td>
            </tr>
            <tr valign="top">
                <td valign="top">Gejala</td>
                <td>:</td>
                <td valign="top">
                    <label>
                        <textarea name="gejala" id="gejala" cols="45" rows="5"><?php echo "$gejala"; ?></textarea>
                    </label> </td>
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
                    <a href="gejala.php"><input type="button" name="batal" id="batal" value="Batal" /></a></td>
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