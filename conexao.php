<?php

$hostname = "localhost";
$bancodedados = "CrudBD";
$usuarios = "root";
$senha = "";

$conexao =mysqli_connect($hostname, $usuarios, $senha, $bancodedados);
if (!$conexao) {
    die("Falha na conexao:" .mysqli_connect_error());
}
else {
    
    echo "<p>Conexão com o banco de dados:<strong>Conectado!</strong></p> ";
}
?>