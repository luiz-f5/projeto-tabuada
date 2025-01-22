<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Media</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
  <hr>
  <hgroup>
    <h1>Media</h1>
    <h2>Média Aritmética</h2>

  </hgroup>
  <hr>
  <form action="media.php" method="get">
    <br>Digite a primeira nota: <input typer="number" name="n1" step="0.01"> <br>
    Digite a segunda nota: <input type="number" name="n2" step="0.01"> <br>
    Digite a terceira nota: <input type="number" name="n3" step="0.01"> <br><br>
    <input value="Clique aqui!" type="submit">
  </form>

  <?php
  if (isset($_GET["n1"], $_GET["n2"], $_GET["n3"])) {

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $nota3 = $_GET["n3"];
    if ($nota1 == null or $nota2 == null or $nota3 == null) {
      echo "<br>Digite as três notas corretamente<br><br> <b>Impossível realizar a média!</b>";
    } else {
      $media = ($nota1+$nota2+$nota3)/3;

      echo "<br>Primeira nota: $nota1<br>Segunda nota: $nota2<br>Terceira nota: $nota3<br><br>A média aritmética sera aproximadamente igual a: " . round($media, 2);
    }

  }
  ?>
  <hr>
</body>
</html>
