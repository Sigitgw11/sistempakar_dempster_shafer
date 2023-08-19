<?php include "../koneksi.php";?>
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
    $(document).ready(function() {
        $('div.TxtKdPenyakit option[value="<?php echo $_GET['
            kdpenyakit '];?>').prop("selected", true);
        $('TxtKdPenyakit').val("<?php echo $_GET['kdpenyakit'];?>");

        var gejala2 = "1";
        if (gejala2 == "0") {
            $("#gejala2").prop('checked', false);
        } else {
            $("#gejala2").prop('checked', true);
        } <
        ?
        php
        $kd_penyakit = $_GET['kdpenyakit'];
        $query_G = mysqli_query($conn, "SELECT * FROM tbrule WHERE kd_penyakit='$kd_penyakit' ");
        while ($data_G = mysqli_fetch_array($query_G)) {
            ?
            >
            var gejala < ? php echo $data_G['kd_gejala']; ? > ;
            gejala < ? php echo $data_G['kd_gejala']; ? >= "<?php echo $data_G['kd_gejala'];?>"; <
            ?
            php echo $data_G['kd_gejala']; ? >
            if (gejala < ? php echo $data_G['kd_gejala']; ? >= = "0") {
                $("#gejala[<?php echo $data_G['kd_gejala'];?>]").prop('checked', false);
            } else {
                $("#gejala[<?php echo $data_G['kd_gejala'];?>]").prop('checked', true);
            } <
            ?
            php
        } ? >
    });

    function centang() {
        alert("tes");
    }

    function kembali() {
        window.location = "rule_algoritma.php";
    }
    </script>
</head>

<body>
    <form id="form1" name="form1" method="post" action="update_kaidah_produksi.php" enctype="multipart/form-data">
        <div>
            <table class="tab" width="650" border="1" align="center" cellpadding="4" cellspacing="1"
                bordercolor="#000000" bgcolor="#CCCC99">
                <tr bgcolor="#FFFFFF">
                    <td style="background:#808080;color:#FFFFFF">Kode Rule : <?php echo $_GET['kdpenyakit'];?></td>
                    <td style="background:#808080;color:#FFFFFF"><strong>Edit Data Basis Pengetahuan</strong></td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td colspan="2">
                        <ul style="list-style:none;"><strong>

                                IF</strong> <?php
	include "../koneksi.php";
	$query=mysqli_query($conn,"SELECT * FROM tb_gejala") or die("Query Error..!" .mysql_error);
	while ($row=mysqli_fetch_array($query)){
	//mencari data gejala yang di edit
	$kd_penyakit=$_GET['kdpenyakit'];
	$kd_gejala=$row['id'];
		$kueri = mysqli_query ($conn,"SELECT * FROM tb_rules WHERE id_problem='$kd_penyakit' AND id_evidence='$kd_gejala' ORDER BY id_evidence desc ");
		$edit = mysqli_fetch_array($kueri);
		$checked = explode(', ', $edit['id_evidence']);
	//#end data gejala
	?>
                            <li><input type="checkbox" name="gejala[]" id="gejala" value="<?php echo $row['id'];?>"
                                    <?php in_array ($row['id'], $checked) ? print "checked" : "";  ?>>
                                <?php echo $row['kdgejala'] ."<strong>|&nbsp;</strong>".$row['gejala'];?><strong>&nbsp;&nbsp;AND</strong>
                            </li>
                            <?php } ?></ul>

                        <strong>&nbsp;&nbsp;THEN
                            <div class="TxtKdPenyakit">
                                <?php 
	$sqlp = "SELECT * FROM tb_penyakit WHERE id='$kd_penyakit' ";
	$qryp = mysqli_query($conn,$sqlp)or die ("SQL Error: ".mysqli_error());
	while ($datap=mysqli_fetch_array($qryp)) {
		echo "$datap[id]&nbsp;|&nbsp;$datap[nama_penyakit]";
	}
  ?><input type="hidden" name="TxtKdPenyakit" value="<?php echo $_GET['kdpenyakit'];?>" /></div>
                        </strong>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td>&nbsp;</td>
                    <td><input type="button" name="Submit2" value="Back" onclick="history.back(-1);" /><input
                            type="submit" name="Submit" value="Update Rule" /></td>
                </tr>
            </table>
        </div>
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