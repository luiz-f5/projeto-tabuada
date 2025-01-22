<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Par</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
  <hr>
  <hgroup>
    <h1>Projeto Par</h1>
    <h2>Par ou Ímpar</h2>
  </hgroup>
  <hr>
  <form action="par.php" method="get">
    <p>
      Digite um número:
    </p>
    <input type="number" name="num"> <br><br>
    <input value="Clique aqui!" type="submit">
  </form>
  <?php
  if (isset($_GET["num"])) {
    $numero = $_GET["num"];
    if ($numero == null) {
      echo "<br><b>Digite um número,  porfavor!</b>";
    } else {
      if ($numero%2 == 0) {
        echo "<br>Número digitado: " . $numero. "<br>";
        echo "<br><b>Este número é par</b>";
      } else {
        echo "<br>Número digitado: " . $numero  . "<br>";
        echo "<br><b>Este número é ímpar</b>";
      }
    }
  }
  ?>
  <hr>
</body>
</html>
