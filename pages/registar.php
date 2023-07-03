<?php
session_start();
include('../service/conexao.php');
$msg = '';
if (isset($_POST['submit'])) {
    $time = time() + 10;
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $names = $_POST['name'];
    $sql = "INSERT INTO `user` ( name, username, password) VALUE
                        ( '$names', '$username', '$password')";
    $res = mysqli_query($con, $sql);

    header('location: dashboard.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title> Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/registar.css">
</head>

<body>

    <body>
        <div class="container">
            <form id="login-form" class="form" action="" method="post">
                <h2 class="text-center text-info">Registar Form</h2>
                <input type="text" name="username" id="username" class="form-control"  placeholder="Digite seu username" required>
                <input type="text" name="name" id="name" placeholder="Digite o seu Nome" class="form-control" required>
                <input type="text" name="password" id="password" placeholder="Digite a Senha" class="form-control" required>

                <input type="submit" name="submit" class="btn btn-success" value="Submit">
                <br>
                <p>Já possui uma conta? <a href="registar.php">Registre-se</a></p>
                <span style="color:red;"><?php echo $msg ?></span>

            </form>
        </div>
    </body>
</body>

</html>