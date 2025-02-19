<?php

$hostname = "localhost";
$bancodedados = "CrudBD";
$usuarios = "root";
$senha = "";

$mysqli = new mysqli($hostname, $username, $password, $database);
if ($mysqli->connect_error) {
    echo "Falha na conexao: (" . $mysqli->connect_errno .") ". $mysqli->connect_error;
}
?>