<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordenamento</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
  <hr>
  <hgroup>
    <h1>Projeto Ordenacao</h1>
    <h2>Ordenação de Números(Ordem Crescente e Decrescente)</h2>
  </hgroup>
  <hr>
  <form action="ordenacaoNumeros.php" method="get">
    Digite o primeiro número: <input type="number" name="n1" step="0.01"> <br><br>
    Digite o segundo número: <input type="number" name="n2" step="0.01"> <br><br>
    Digite o terceiro número:  <input type="number" name="n3" step="0.01"> <br><br>
    <input value="Clique aqui!" type="submit"> <br><br>
  </form>


  <?php
  function ordenarNumeros($a, $b, $c) {

    $numeros = [$a,
      $b,
      $c];


    sort($numeros);
    echo "Números em ordem crescente: " . implode(", ", $numeros) . "\n<br><br>";


    rsort($numeros);
    echo "Números em ordem decrescente: " . implode(", ", $numeros) . "\n";
  }

  if (isset($_GET["n1"], $_GET["n2"], $_GET["n3"])) {
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    ordenarNumeros($n1, $n2, $n3);
  }
  ?>
  <hr>



</body>
</html>
