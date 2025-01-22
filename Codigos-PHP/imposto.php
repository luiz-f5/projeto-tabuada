<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto IR</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
  <hr>
  <hgroup>
    <h1>Imposto</h1>
    <h2>Cálculo de Imposto de Renda</h2>
  </hgroup>
  <hr>
  <form action="imposto.php" method="get" step="0.01">
    <p>
      Digite seu valor salarial:
    </p>
    <input type="number" name="salario" step="0.01"><br><br>
    <input value="Clique aqui!" type="submit">
  </form>
  <?php
  if (isset($_GET["salario"])) {
    $salario = $_GET["salario"];
    $a_1 = 75/1000;
    $a_2 = 15/100;
    $a_3 = 225/1000;
    $a_4 = 275/1000;
    if ($salario != null) {
      $p1 = $salario * $a_1;
      $p2 = $salario * $a_2;
      $p3 = $salario * $a_3;
      $p4 = $salario * $a_4;

    } else {
      echo "<br><b>Por favor digite seu salário!</b>";
    }

    if ($salario >= 2259.21 && $salario <= 2836.65) {
      echo "<br>Salário atual:  R$" . $salario . "<br>";
      echo "<br>Parcela a deduzir sera igual a: R$" . $p1;
    } elseif ($salario > 2836.65 && $salario <= 3751.05) {
      echo "<br>Salário atual:  R$" . $salario . "<br>";
      echo "<br>Parcela a deduzir sera igual a: R$" . $p2;
    } elseif ($salario > 3751.05 && $salario <= 4664.68) {
      echo "<br>Salário atual:  R$" . $salario . "<br>";
      echo "<br>Parcela a deduzir sera igual a: R$" . $p3;
    } elseif ($salario > 4664.68) {
      echo "<br>Salário atual:  R$" . $salario. "<br>";
      echo "<br>Parcela a deduzir sera igual a: R$" . $p4;

    } elseif ($salario >= 0 && $salario < 2259.21) {
      echo "<br>Salário atual:  R$" . $salario. "<br>";
      echo "<br>Você está isento de pagar imposto de renda";
    }
  }
  ?>
  <hr>
</body>
</html>
