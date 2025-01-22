<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Fatorial</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
  <hr>
    <h1>Fatorial</h1>    
  <form action="fatorial.php" method="get">
    <p>
      Digite o número para a fatorial
    </p>
    <input type="number" name="fatorial">
    <input value="Clique aqui!" type="submit"> <br><br>
  </form>
  <?php
  if (isset($_GET["fatorial"])) {
    $fatorial = $_GET["fatorial"];
    $resultado = 1;
    if ($fatorial == null) {
      echo "<br>Por favor digite um número válido :)";
    } else {
      for ($x = 1; $x <= $fatorial; $x++) {
        $resultado *= $x;

      }

      echo "A fatorial de " . $fatorial. "! (";
      for ($x = 1; $x <= $fatorial; $x++) {
        if ($x < $fatorial) {
          echo $x. "*";
        } else {
          echo $x;
        }
      }
      echo ") = " . $resultado;
    }
  }
  ?>
  <hr>
</body>
</html>
