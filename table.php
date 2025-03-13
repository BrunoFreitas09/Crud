<?php
include("conexao.php");
$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="front.css">
  <title>Listagem</title>
</head>

<body>
  <div>
    <section>
      <table class="table" style="width:100%; border-collapse: collapse;" border="1">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Número</th>
            <th scope="">....</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['id'] . "</td>";
            echo "<td>" . $user_data['nometeste'] . "</td>";
            echo "<td>" . $user_data['numeroteste'] . "</td>";
            echo "<td> actions </td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </section>
  </div>
</body>

</html>
