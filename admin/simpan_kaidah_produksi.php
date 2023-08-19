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
    <div>
        <?php
include "../koneksi.php";
// mengambil variabel dari halaman rule_kaidah_produksi.php
$gejala = '';
$events = '';
if (isset($_POST['gejala'])) {
    $selectors = htmlentities(implode(',', $_POST['gejala']));
}
$data = $selectors;
$input = $data;
//memecahkan string input berdasarkan karakter '\r\n\r\n'
$pecah = explode("\r\n\r\n", $input);
// string kosong inisialisasi
$text = "";
//untuk setiap substring hasil Jantung, sisipkan <p> di awal dan </p> di akhir
// lalu menggabungnya menjadi satu string untuk $text
for ($i = 0; $i <= count($pecah) - 1; $i++) {
    $part = str_replace($pecah[$i], "<p>" . $pecah[$i] . "</p>", $pecah[$i]);
    $text .= $part;
}
//menampilkan outputnya
$kd_penyakit = $_POST['TxtKdPenyakit'];
$cf = $_POST['cf'];
//menyimpan data kedalam tabel relasi
$text_line = $data;
$text_line = $data;
$text_line = explode(",", $text_line);
$posisi = 0;
for ($start = 0; $start < count($text_line); $start++) {
    $baris = $text_line[$start];
    // untuk nilai bobot
    $sql = "INSERT INTO  tb_rules (id_problem,id_evidence,cf) VALUES ('$kd_penyakit','$baris','$cf' )";
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    $posisi++;
}
echo "<center><strong>Data Rule Berhasil di Set..!</strong></center>";
echo "<center><a href='rule_algoritma.php'>OK</a></center>";
?>
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