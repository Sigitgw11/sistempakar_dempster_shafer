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
            <h2>Registrasi Pengguna</h2>
            <script type="text/javascript">
            $(document).ready(function() {
                $("#TxtNama").focus();
            })

            function validasi(form) {
                if (form.TxtNama.value == "") {
                    alert("Masukkan nama !");
                    form.TxtNama.focus();
                    return false;
                } else if (form.cbojk.value == 0) {
                    alert("Masukkan jenis kelamin !");
                    form.cbojk.focus();
                    return false;
                } else if (form.TxtUmur.value == "") {
                    alert("Masukkan umur anda !");
                    form.TxtUmur.focus();
                    return false;
                } else if (form.TxtAlamat.value == "") {
                    alert("Masukkan alamat anda !");
                    form.TxtAlamat.focus();
                    return false;
                } else if (form.textemail.value == "") {
                    alert("Masukkan email !");
                    form.textemail.focus();
                    return false;
                }
                form.submit();
            }
            </script>
            <form onSubmit="return validasi(this)" method="post" name="form1" target="_self" action="addpasien.php">
                <table class="tab" width="415" style="border:0px;" border="0" align="center">
                    <tr>
                        <td colspan="2">
                            <div align="center"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input name="TxtNama" id="TxtNama" type="text" size="35" maxlength="30"></td>
                    </tr>
                    <tr>
                        <td>Kelamin</td>
                        <td>
                            <select name="cbojk" id="cbojk">
                                <option value="0" selected="selected">- Jenis Kelamin -</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>
                            <input name="TxtUmur" id="TxtUmur" type="text" size="2" maxlength="3"></td>
                    </tr>
                    <tr>
                        <td width="76">Alamat</td>
                        <td width="312">
                            <input name="TxtAlamat" id="TxtAlamat" type="text" size="35" maxlength="60"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="textemail" id="textemail" size="25" maxlength="25"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Daftar">
                            <input type="reset" name="Submit2" value="Reset" /></td>
                    </tr>
                </table>
            </form>

        </div>
        <div class="cleared"></div>
    </div>

    <div class="cleared"></div>
    </div>
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