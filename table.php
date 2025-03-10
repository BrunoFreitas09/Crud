<?php
  include ("conexao.php");
  $sql = "SELECT * FROM usuarios ORDER  BY id DESC";
  $result = $conexao->query($sql); 


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Listagem</title>


</head>
<body>
<table class=".table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Número</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php
            while ($user_data = mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<tr>".user_data['id']."</td>";
            }
          ?>
      <td>teste2</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mais Teste</td>
      <td>Mais teste</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>maais testes</td>
      <td>maais testes</td>
 
    </tr>
  </tbody>
</table>


<?php
        /*config.php do cara é = ao seu conexao.php*/    
    ?>
</body>
</html>