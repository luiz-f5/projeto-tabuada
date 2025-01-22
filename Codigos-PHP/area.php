<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Area</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
  <hr>
  <hgroup>
    <h1>Area</h1>
    <h2>Área de um Retângulo</h2>
  </hgroup>

  <hr>
  <form action="area.php" method="get">
    <p>
      Digite a altura do retângulo:
    </p>
    <input type="number" name="altura" step="0.01">
    <p>
      Digite a largura do retângulo:
    </p>
    <input type="number" name="largura" step="0.01"> <br><br>
    <input value="Clique aqui!" type="submit">
  </form>

  <?php
  if (isset($_GET["largura"], $_GET["altura"])) {
    $b = $_GET["largura"];
    $h = $_GET["altura"];

    if ($b == null && $h != null) {
      $b = 0;
      echo "<br>Apenas a altura foi informada: $h" . " m<br><br><strong> Não é possível cálcular a área</strong>";
    } elseif ($h == null && $b != null) {
      $h = 0;
      echo "<br>Apenas a base foi informada: $b" . " m<br><br><strong>Não é possível calcular a área</strong>";
    } elseif ($h == null && $b == null) {
      $b = 0;
      $h = 0;
      echo "<br><b>Nenhum dos valores foi informado, porfavor digite algo</b><br>";
    } else {
      echo "<br>Altura do Retângulo: $h m<br><br>Base do Retângulo: $b m <br><br>Área do Retângulo: " . $b * $h . " m²";
    }
  }


    ?>
    <hr>
  </body>
</html>
