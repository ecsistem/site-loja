<?php
//Conexão com o Banco de Dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db_name = "test";


$conexao = mysqli_connect($servidor, $usuario, $senha,
$db_name)
 or die ("Erro de Conexão");

?>