<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
<?php 
        $_Nome = $_GET["name"] ?: "Nome inválido";
        $_Number = $_GET["number"] ?: "Número inválido";

        echo ("Seu nome é: $_Nome e seu número é $_Number")

        include("conexao.php");
?>
</section>
</body>
</html>

