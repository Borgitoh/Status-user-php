<?php
session_start();
include('../service/conexao.php');
$id = $_SESSION['user_id'];
$status = "Offline";

$sql = "UPDATE `seu_banco_de_dados`.`users` SET `status` = 'Offline' WHERE (`id` = '$id')";

if ($con->query($sql) === TRUE) {
    echo "Atualização realizada com sucesso";
} else {
    echo "Erro ao atualizar o registro: " . $con->error;
}



unset($_SESSION['UID']);
header('location:../index.php');
die();

?>