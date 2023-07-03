<?php
session_start();
include('../service/conexao.php');
$uid=$_SESSION['UID'];
$res=mysqli_query($con,"UPDATE `status`.`user` SET `password` = '123123', `status` = 'Online' WHERE (`id` = '$uid');
");
?>