<?php
$hostname = "sql111.infinityfree.com";
$usuario = "if0_39533844";
$senha = "Shakyra26";
$bancodedados = "banco_php";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}
?>
