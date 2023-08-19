<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Diagnosa Gangguan Mental</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">

        <form class="form-signin" action="" method="POST">
            <h2 class="form-signin-heading">Login Admin</h2>
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required
                autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
        </form>
        <?php
        if (isset($_POST['login'])){
          include "../koneksi.php";
          $username = $_POST['username'];
          $pass = $_POST['pass'];

          $cek_user = mysqli_query ($conn,"SELECT * FROM login where username ='$username'");
          $row = mysqli_num_rows ($cek_user);

          if( $row === 1){
            //jalankan prosedur seleksi password
            $fetch_pass = mysqli_fetch_assoc($cek_user);
            $cek_pass = $fetch_pass['password'];
            if($cek_pass <> $pass){
              echo"<script>alert('Password Salah');</script>";
            }else{
              $_SESSION['log'] = true;
              echo"<script>alert('Login Berhasil');document.location.href='admin.php'</script>";
            }
          }else {
            echo"<script>alert('Username salah atau belum terdaftar');</script>";
          }
        }

      ?>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>