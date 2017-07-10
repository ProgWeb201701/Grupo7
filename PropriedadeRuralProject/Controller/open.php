<?php
require_once '../BDConfig/conexao_mysqli.php';

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$conexao = conexao_mysqli::getInstancia();
$conexao->conectar();

$result = $conexao->executeQuery("SELECT * FROM `usuario` WHERE `nome` = '$login' AND `senha`= '$senha'");

if(mysqli_num_rows ($result) > 0 )
{
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $conexao->desconectar();
    header('location:../View/listaPosts.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    $conexao->desconectar();
    header('location:../View/index.php');
}

?>