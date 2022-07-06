<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "mdf";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco) or die("Erro ao se conectar");
?>