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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    <div class="jumbotron">
    <h2>Data Rule | Basis Pengetahuan</h2><hr>
<div class="konten">

<?php
include "../koneksi.php";
?>
<form id="form1" name="form1" method="post" action="simpan_kaidah_produksi.php" enctype="multipart/form-data"><div>
  <table class="tab" width="650" border="1" align="center" cellpadding="4" cellspacing="1" bordercolor="#000000" bgcolor="#CCCC99">
      <tr bgcolor="#808080" style="color:#FFFFFF">
        <td>Kode Rule</td>
        <td>&nbsp;</td>
      </tr>
      <tr bgcolor="#808080" style="color:#FFFFFF">
        <td colspan="2"><strong>IF</strong><ul style="list-style:none;">
		<?php
include "../koneksi.php";
$arrPenyakit = array();
$arrGejala = array();
$query = mysqli_query($conn, "SELECT * FROM tb_gejala") or die("Query Error..!" . mysql_error());
while ($row = mysqli_fetch_array($query)) {
    $arrGejala["$row[id]"] = $row['kdgejala'] . "," . $row['gejala'];
    ?>
    	<li><input type="checkbox" name="gejala[]" id="gejala" value="<?php echo $row['id']; ?>">
    	<?php echo $row['kdgejala'] . "<strong>|&nbsp;</strong>" . $row['gejala']; ?><strong>&nbsp;&nbsp;AND</strong></li>
		 <?php }?></ul><strong>&nbsp;&nbsp;THEN
		 <select style="color:#000000" name="TxtKdPenyakit" id="TxtKdPenyakit">
		   <option value="NULL" style="color:#000000">[ Daftar Penyakit ]</option>
		   <?php
$sqlp = "SELECT * FROM tb_penyakit ORDER BY id";
$qryp = mysqli_query($conn, $sqlp)
or die("SQL Error: " . mysqli_error());
while ($datap = mysqli_fetch_array($qryp)) {
    if ($datap['id'] == $kdsakit) {
        $cek = "selected";
    } else {
        $cek = "";
    }
    $arrPenyakit["$datap[id]"] = $datap['nama_penyakit'];
    echo "<option style='color:#000000' value='$datap[id]' $cek>$datap[id]&nbsp;|&nbsp;$datap[nama_penyakit]</option>";
}
?>
		   </select>
		 CF<input type="text" name="cf" size="5" style="color:#000000"></strong></td>
        </tr>
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td><input type="reset" name="Submit2" value="Reset" /><input type="submit" name="Submit" value="Set Rule" /></td>
      </tr>
    </table>
  </div>
</form>
<table width="100%" border="1" cellpadding="4" cellspacing="1" >
  <tr bgcolor="#808080" style="color:#FFFFFF">
    <td width="61"><strong>KD Gejala</strong></td>
    <td width="725"><strong>Nama Gejala</strong><span style="float:right; margin-right:25px;"><strong></strong></span></td>
    <?php $query_p = mysqli_query($conn, "SELECT id_problem FROM tb_rules GROUP BY id_problem");
while ($data_p = mysqli_fetch_array($query_p)) {
    ?>
    <td width="88" ><?php $idp = $data_p['id_problem'];
    echo "$idp | ";
    print_r($arrPenyakit["$idp"]);?><br><a href="edit_rule_base.php?kdpenyakit=<?php echo $data_p['id_problem']; ?>">Edit Rule</a></td><?php }?>
    </tr>
    <?php
$query = mysqli_query($conn, "SELECT * FROM tb_rules GROUP BY id_evidence ORDER BY id_evidence ASC ") or die(mysqli_error());
$no = 0;
while ($row = mysqli_fetch_array($query)) {
    $idpenyakit = $row['id_problem'];
    $no++;
    ?>
  <tr bgcolor="#FFFFFF" bordercolor="#333333">
    <td valign="top"><?php echo $row['id_evidence']; ?></td>
    <td><?php $idG = $row['id_evidence'];
    print_r($arrGejala["$idG"]); // echo $row['gejala'];?>
		</td><?php $query_pb = mysqli_query($conn, "SELECT id_problem FROM tb_rules GROUP BY id_problem ");
    while ($data_pb = mysqli_fetch_array($query_pb)) {
        ?>
    <td><?php $kdpenyakit_B = $data_pb['id_problem'];
        $kdgejala_B = $row['id_evidence'];
        $query_CG = mysqli_query($conn, "SELECT * FROM tb_rules WHERE id_problem='$kdpenyakit_B' AND id_evidence='$kdgejala_B' ");
        while ($data_GB = mysqli_fetch_array($query_CG)) {echo "<center>&#8730;</center>";
            echo "<center><strong><a title='Edit Nilai CF Pada Tiap Gejala' href='edit_cf.php?id_problem=$kdpenyakit_B&id_evidence=$kdgejala_B&cf=$data_GB[cf]'>cf=$data_GB[cf]</a></strong></center>";}
        ?></td><?php }?>
    </tr>
  <?php }?>
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

