<?php
session_start();
include('service/conexao.php');
$msg = '';
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
   $password = mysqli_real_escape_string($con, $_POST['password']);
   $sql = "select * from user where username='$username' and password='$password'";
   $res = mysqli_query($con, $sql);
   $count = mysqli_num_rows($res);
   if ($count > 0) {
      $row = mysqli_fetch_assoc($res);
      $_SESSION['UID'] = $row['id'];
      $time = time() + 10;
      $res = mysqli_query($con, "update user set status='Online' where id=" . $_SESSION['UID']);
      header('location:pages/dashboard.php');
      die();
   } else {
      $msg = "Please enter correct login details";
   }
   echo 'keene';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <body>
        <div class="container">
            <h2>Login Form</h2>
            <form id="login-form" class="form" action="" method="post">

                <input type="text" name="username" id="username" class="form-control" required>
                <input type="password" name="password" id="password" class="form-control" required>
                <div class="forgot-password">
                    <a href="#">Esqueceu a senha?</a>
                </div>
                <input type="submit" name="submit" class="btn btn-success" value="Login">

            </form>
            <div class="login-google">
                <a href="pages/registar.php"> <button> Registar</button></a>
            </div>
        </div>
    </body>
</body>

</html>