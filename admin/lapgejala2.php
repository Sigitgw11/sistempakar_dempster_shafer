<?php
include "../koneksi.php";
$kdsakit = $_POST['CmbPenyakit'];
$sqlp = "SELECT * FROM tb_penyakit WHERE id='$kdsakit' ";
$qryp = mysqli_query($conn, $sqlp);
$datap = mysqli_fetch_array($qryp);
$sakit = $datap['nama_penyakit'];
?>
<html>

<head>
    <title>Diagnosa Gangguan Mental</title>
    <link href="favicon.ico" rel="icon" />
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css" media="screen" />
</head>

<body>

    <br>
    <table width="650" border="1" align="center" cellpadding="2" cellspacing="1" bgcolor="#99CC99">
        <tr bgcolor="#808080">
            <td colspan="3">
                <div align="left" style="background-color:#808080; width:650;"><b>Nama Penyakit :
                        <?php echo $sakit; ?>
                    </b>
                </div>
            </td>
        </tr>
        <tr bgcolor="#808080">
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr bgcolor="#808080">
            <td colspan="3"><b>Daftar Gejala Per Penyakit</b> <br>
                <br></td>
        </tr>
        <tr bgcolor="#808080">
            <td width="39" align="center"><b>No</b></td>
            <td width="84"><b>Kode</b></td>
            <td width="361"><b>Nama Gejala</b></td>
        </tr>
        <?php
$sqlg = "SELECT * FROM tb_rules,tb_gejala WHERE tb_rules.id_problem='$kdsakit' AND tb_gejala.id=tb_rules.id_evidence ";
$qryg = mysqli_query($conn, $sqlg) or die("SQL Error" . mysqli_error());
$no = 0;
while ($datag = mysqli_fetch_array($qryg)) {
    $no++;
    ?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?php echo $no; ?></td>
            <td><?php echo $datag['kdgejala']; ?></td>
            <td><?php echo $datag['gejala']; ?></td>
        </tr>
        <?php
}
?>
        <tr>
            <td colspan="3" bgcolor="#808080">
                <div align="right"><a href="lapgejala.php" style="color:#FFFFFF">Kembali</a></div>
            </td>
        </tr>
    </table>
</body>

</html>