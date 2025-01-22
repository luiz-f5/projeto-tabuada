<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Fibonnaci</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
  <hr>
  <hgroup>
    <h1>Fibonnaci</h1>
    <h2>Sequência de Fibonnaci</h2>
  </hgroup>


  <form action="fibonnaci.php" method="get">
    <p>
      Digite a quantidade da sequencia de fibbonaci:
    </p>
    <input type="number" name="sequencial"> <br><br>
    <input value="Clique aqui!" type="submit">

  </form>
  <?php
  if (isset($_GET["sequencial"])) {
    $sequencia = $_GET["sequencial"];
    $x = 0;
    $y = 1;
    $z = 1;
    if ($sequencia == null) {
      echo "<br> Por favor digite algum número!";
    } else {
      echo "<br> <b>Sequencia de Fibonnaci de</b> " . $sequencia+2 . " <b> termos abaixo </b>: <br><br>" . $x . ", " . $y . ",";
      for ($c = 1; $c <= $sequencia; $c++) {
        if ($c < $sequencia) {
          $z = $x+$y;
          $x = $y;
          $y = $z;

          echo $z  . ", ";
        } else {
          $z = $x+$y;
          $x = $y;
          $y = $z;

          echo $z;
        }

      }
    }
  }

  ?>


  <hr>
</body>
</html>
