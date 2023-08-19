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
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">

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
    .form {
        width: 99%;
        background: linear-gradient(to left, #FFF, #EEE);
        border: 1px solid #CCC;
        border-radius: 5px 5px;
        padding: 3px 3px 3px 5px;
    }

    .form p {
        font-weight: bold;
        font-size: 12pt;
    }

    p {
        border: 0px solid #03F;
    }

    .Y1 {
        text-align: center;
        border: 1px solid #C30;
        background: #F66;
        float: left;
        width: 220px;
    }

    .Y2 {
        text-align: center;
        border: 1px solid #C30;
        background: #FF9;
        float: left;
        width: 220px;
    }

    .Y1r2 {
        text-align: center;
        border: 1px solid #C30;
        background: #933;
        float: left;
        width: 220px;
        margin-top: -80px;
    }

    .Y2r2 {
        text-align: center;
        border: 1px solid #C30;
        background: #933;
        float: left;
        width: 220px;
        margin-top: -80px;
    }

    .X1 {
        text-align: center;
        border: 1px solid #0F0;
        background: #0C9;
        float: left;
        width: 220px;
    }

    .X2 {
        text-align: center;
        border: 1px solid #33C;
        background: #06F;
        float: left;
        width: 220px;
    }

    .teta1 {
        text-align: center;
        border: 1px dashed #C30;
        background: linear-gradient(to right, #0CF, #39F);
    }

    .teta2 {
        text-align: center;
        border: 1px dashed #9C0;
        background: linear-gradient(to right, #0CF, #39F);
    }

    .X1baris2 {
        border: 1px solid #36F;
    }

    .densitas {
        border: 2px solid #CC0;
        padding: 3px 3px 3px 3px;
        text-align: center;
        display: block;
        float: left;
        width: 220px;
    }

    .kolom2X {
        border: 1px solid #06C;
        margin-top: -100px;
    }
    </style>
</head>

<body>
    <?php include "koneksi.php"; ?>

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
            <?php include "koneksi2.php"; ?>
            <table width="100%" align="center">
                <tr>
                    <td width="786">
                        <h3>PROSES DIAGNOSA PENYAKIT GANGGUAN MENTAL</h3><strong>Pilihlah Gejala Yang Anda
                            Alami..!</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form method="post">
                            <?php
//-- menampilkan daftar gejala
$arrKDGejala=array();
$arrKDGejalaSelect=array();
$sql="SELECT * FROM tb_gejala ORDER BY id ASC ";
$result=$db->query($sql);
while($row=$result->fetch_object()){
	echo "<input type='checkbox' name='evidence[]' value='{$row->id}'> {$row->kdgejala} | {$row->gejala}<br>";
	$arrKDGejala[]=$row->gejala; //$arrKDGejalaSelect[]=$row->id;
}
?><br>
                            <center><input type="submit" value="Proses Diagnosa Penyakit"></center>
                        </form>
                        <p style="font-weight:bold; text-align:center; background:#06F;"><strong>Hasil Diagnosa</strong>
                        </p>
                        <?php
if(isset($_POST['evidence'])){
	if(count($_POST['evidence'])<2){
		echo "Pilih minimal 2 gejala";
	}else{
		echo "<div class='form'><p>Gejala Yang dipilih :</p>"; 
		$arrKDGejalaSelect=$_POST['evidence'];
		foreach($arrKDGejalaSelect as $kdGSelect){ 
			echo $kdGSelect." | ";
			$queryG=mysqli_query($conn,"SELECT * FROM tb_gejala WHERE id='$kdGSelect' ");
			$dataG=mysqli_fetch_array($queryG); echo $dataG['gejala']."<br>";
			}
		echo "</div>";
		$sql = "SELECT GROUP_CONCAT(b.kdpenyakit), a.cf, a.id_evidence
			FROM tb_rules a
			JOIN tb_penyakit b ON a.id_problem=b.id
			WHERE a.id_evidence IN(".implode(',',$_POST['evidence']).") 
			GROUP BY a.id_evidence ORDER BY a.id_evidence DESC ";
		$result=$db->query($sql);
		$evidence=array();
		$gejalaSelect=array();
		while($row=$result->fetch_row()){
			$evidence[]=$row;
		} $no=0;
		foreach($evidence as $kdgejala){
			$no=$no+1;
			$queryG=mysqli_query($conn,"SELECT * FROM tb_gejala WHERE id='$kdgejala[2]' "); $dataG=mysqli_fetch_array($queryG); 
			$dataG['id']." | ".$dataG['gejala']."<br>";
			}unset($kdgejala);
?>
                        <?php
		$sql="SELECT GROUP_CONCAT(kdpenyakit) FROM tb_penyakit ";
		$result=$db->query($sql);
		$row=$result->fetch_row();
		$fod=$row[0];
		$densitas_baru=array();
		while(!empty($evidence)){ 
			$densitas1[0]=array_shift($evidence); 
			$densitas1[1]=array($fod,1-$densitas1[0][1]); 
			$Y2=1-$densitas1[0][1];
			$densitas2=array();
			if(empty($densitas_baru)){
				$densitas2[0]=array_shift($evidence);
			}else{
				foreach($densitas_baru as $k=>$r){
					if($k!="&theta;"){
						$densitas2[]=array($k,$r); 
					}
				}
			}

			$theta=1;
			foreach($densitas2 as $d) $theta-=$d[1]; 
			$densitas2[]=array($fod,$theta); 
			$m=count($densitas2); 
			$densitas_baru=array();
			for($y=0;$y<$m;$y++){
				for($x=0;$x<2;$x++){
					if(!($y==$m-1 && $x==1)){
						$v=explode(',',$densitas1[$x][0]);
						$w=explode(',',$densitas2[$y][0]);
						sort($v); 
						sort($w); 
						$vw=array_intersect($v,$w); 
						if(empty($vw)){
							$k="&theta;";
							$nilaiX1Y1;	
							
						}else{
							$k=implode(',',$vw); 

										$nilaiX1Y1=$densitas1[$x][1]*$densitas2[$y][1]; 
                                        foreach($vw as $vwHasil){}
                                         
										
						}
						if(!isset($densitas_baru[$k])){
							$densitas_baru[$k]=$densitas1[$x][1]*$densitas2[$y][1];
							$k=implode(',',$vw); 
						}else{
							$densitas_baru[$k]+=$densitas1[$x][1]*$densitas2[$y][1];
						}
					}
				} 
			}	$dataX2=$theta; $dataY2=$Y2; $Y3=$dataX2*$dataY2;  
			foreach($densitas_baru as $k=>$d){
				if($k!="&theta;"){
					$densitas_baru[$k]=$d/(1-(isset($densitas_baru["&theta;"])?$densitas_baru["&theta;"]:0));			
				}
			}
			foreach($densitas_baru as $kdPdensitas=>$nilaiPDensitas){
			
				}

		} 

		unset($densitas_baru["&theta;"]);
		arsort($densitas_baru);
	?>

                        <?php	
$arrPenyakit=array(); 
$queryPasien=mysqli_query($conn,"SELECT * FROM tb_pasien ORDER BY idpasien DESC"); $dataPasien=mysqli_fetch_array($queryPasien);
$queryP=mysqli_query($conn,"SELECT * FROM tb_penyakit"); while($dataP=mysqli_fetch_array($queryP)){ $arrPenyakit["$dataP[kdpenyakit]"]=$dataP['nama_penyakit']; }	
		echo "<p style='font-weight:bold; border:none;'>Kemungkinan penyakit :</p>";
		$dataSama=array_intersect_key($arrPenyakit,$densitas_baru);
		foreach($dataSama as $k=>$a){ 
			foreach($densitas_baru as $kdpenyakit=>$ranking){
			if($k==$kdpenyakit){ 
			//mengambil solusi penyakit
			$strS=mysqli_query($conn,"SELECT * FROM tb_penyakit WHERE kdpenyakit='$k' ");
			$dataS=mysqli_fetch_array($strS); 
				echo "<strong>Dari perhitungan gejala yang dipilih didapat hasil penyakit  $kdpenyakit | "; print_r($arrPenyakit["$kdpenyakit"]); echo ", "; 
				echo " dengan nilai kepercayaan sebesar ".round($densitas_baru[$kdpenyakit]*100,2)."%<br></strong>";
				echo "Solusi Penanganan : <p style='max-height:100%; border:1px solid #99ccff; color:#000000;'>".$dataS['solusi']."</p><hr>";
				$persen=round($densitas_baru[$kdpenyakit]*100,2);
				//menyimpan data pasien
				$idPasien=$dataPasien['idpasien'];
				$querySimpanP=mysqli_query($conn," INSERT INTO tb_hasil (idpasien,kdpenyakit,persentase,tanggal) VALUES ('$idPasien','$k','$persen', NOW() ) ");
			 }
			}
		}
	}
}
?>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>
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