<?php
    include("conexao.php");
    $_nome = $_POST["nometeste"];
    $_numero = $_POST["numeroteste"];

    $sql="INSERT INTO usuarios (nometeste, numeroteste)
            VALUES ('$_numero', '$_nome')";

            if(mysqli_query($conexao, $sql)) {
                echo "Cadastro realizado com sucesso";
            }

            else {
                echo "ERRO".mysqli_connect_error($conexao);
            }

           mysqli_close($conexao);
?>