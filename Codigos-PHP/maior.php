<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Maior ou Menor</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
  <hr>
  <hgroup>
    <h1>Qual o maior e o menor?</h1>
    <h2>Maior e Menor Número</h2>
  </hgroup>
  <hr>
  <form action="maior.php" method="get">
    <p>
      Digite o primeiro número:
    </p>
    <input type="number" name="n1" step="0.01">
    <p>
      Digite o segundo número:
    </p>
    <input type="number" name="n2" step="0.01">
    <p>
      Digite o terceiro número:
    </p>
    <input type="number" name="n3" step="0.01"> <br><br>
    <input value="Clique aqui!" type="submit">

  </form>
  <?php
  if (isset($_GET["n1"], $_GET["n2"], $_GET["n3"])) {
    $number_1 = $_GET["n1"];
    $number_2 = $_GET["n2"];
    $number_3 = $_GET["n3"];
    $numeros = [$number_1,
      $number_2,
      $number_3];

    switch ($numeros) {
      case $numeros[0] == null && $numeros[1] == null && $numeros[2] == null:
        echo "<br><b>Nenhum dos números foi digitado, por favor digite algo!</b";
        break;
      case $numeros[0] != null && $numeros[1] == null && $numeros[2] == null:
        echo "<br>Apenas um dos valores foi digitado, ou seja,  o primeiro valor!<br><br> 1° número: "  . $numeros[0];
        break;
      case $numeros[0] == null && $numeros[1] != null && $numeros[2] == null:
        echo "<br>Apenas um dos valores foi digitado, ou seja, o segundo valor!<br><br> 2° número: "  . $numeros[1];
        break;
      case $numeros[0] == null && $numeros[1] == null && $numeros[2] != null:
        echo "<br>Apenas um dos valores foi digitado, ou seja,  o terceiro valor!<br><br> 3° número: "  . $numeros[2];
        break;
      case $numeros[0] != null && $numeros[1] != null && $numeros[2] == null:
        echo "<br>Apenas dois valores foram digitados <br><br>";
        if ($numeros[0] == $numeros[1]) {
          for ($i = 0; $i <= 2; $i++) {
            if ($numeros[$i] == null) {
              echo $i+1 . "° número não foi digitado!<br><br>";
            } else {
              echo $i+1 . "° número: " . $numeros[$i]  . "  <br><br>";
            }
          }
          echo "<b>Os dois valores são iguais</b>";
        } else {
          for ($i = 0; $i <= 2; $i++) {
            if ($numeros[$i] == null) {
              echo $i+1 . "° número não foi digitado!<br><br>";
            } else {
              if ($numeros[$i] == max($numeros)) {
                echo $i+1 . "° número: " . $numeros[$i]  . "  <b>(Maior)</b><br><br>";
              } elseif ($numeros[$i] != max($numeros)) {
                echo $i+1 . "° número: " . $numeros[$i]  . "  <b>(Menor)</b><br><br>";
              }

            }

          }
        }
        break;
      case $numeros[0] == null && $numeros[1] != null && $numeros[2] != null:
        echo "<br>Apenas dois valores foram digitados <br><br>";
        if ($numeros[1] == $numeros[2]) {
          for ($i = 0; $i <= 2; $i++) {
            if ($numeros[$i] == null) {
              echo $i+1 . "° número não foi digitado!<br><br>";
            } else {
              echo $i+1 . "° número: " . $numeros[$i]  . "  <br><br>";
            }
          }
          echo "<b>Os dois valores são iguais</b>";
        } else {
          for ($i = 0; $i <= 2; $i++) {
            if ($numeros[$i] == null) {
              echo $i+1 . "° número não foi digitado!<br><br>";
            } else {
              if ($numeros[$i] == max($numeros)) {
                echo $i+1 . "° número: " . $numeros[$i]  . "  <b>(Maior)</b><br><br>";
              } elseif ($numeros[$i] != max($numeros)) {
                echo $i+1 . "° número: " . $numeros[$i]  . "  <b>(Menor)</b><br><br>";
              }

            }

          }
        }
        break;
      case $numeros[0] != null && $numeros[1] == null && $numeros[2] != null:
        echo "<br>Apenas dois valores foram digitados <br><br>";
        if ($numeros[0] == $numeros[2]) {
          for ($i = 0; $i <= 2; $i++) {
            if ($numeros[$i] == null) {
              echo $i+1 . "° número não foi digitado!<br><br>";
            } else {
              echo $i+1 . "° número: " . $numeros[$i]  . "  <br><br>";
            }
          }
          echo "<b>Os dois valores são iguais</b>";
        } else {
          for ($i = 0; $i <= 2; $i++) {
            if ($numeros[$i] == null) {
              echo $i+1 . "° número não foi digitado!<br><br>";
            } else {
              if ($numeros[$i] == max($numeros)) {
                echo $i+1 . "° número: " . $numeros[$i]  . "  <b>(Maior)</b><br><br>";
              } elseif ($numeros[$i] != max($numeros)) {
                echo $i+1 . "° número: " . $numeros[$i]  . "  <b>(Menor)</b><br><br>";
              }

            }

          }
        }
        break;
      default:
        if ($numeros[0] == $numeros[1] && $numeros[1] == $numeros[2]) {
          for ($i = 0; $i <= 2; $i++) {
            echo "<br>" . $i+1 . "° número: " . $numeros[$i]  . "<br>";

          }
          echo "<br><b>Os três valores são iguais</b>";

        } elseif ($numeros[0] != $numeros[1] && $numeros[1] == $numeros[2]) {
          for ($i = 0; $i <= 2; $i++) {
            echo "<br>" . $i+1 . "° número: " . $numeros[$i]  . "<br>";
          }
          echo "<br><b>Há dois valores iguais!</b><br>";
          echo "<br>O maior número é: " . max($numeros) . " <br><br> ";
          echo "O menor número é: " . min($numeros);

        } elseif ($numeros[0] == $numeros[1] && $numeros[1] != $numeros[2]) {
          for ($i = 0; $i <= 2; $i++) {

            echo "<br>" . $i+1 . "° número: " . $numeros[$i]  . "<br>";
          }
          echo "<br><b>Há dois valores iguais!</b><br>";
          echo "<br>O maior número é: " . max($numeros) . " <br><br> ";
          echo "O menor número é: " . min($numeros);

        } else {
          for ($i = 0; $i <= 2; $i++) {
            echo "<br>" . $i+1 . "° número: " . $numeros[$i]  . "<br>";
          }
          echo "<br>O maior número é: " . max($numeros) . " <br><br> ";
          echo "O menor número é: " . min($numeros);
        }
        break;
    }
  }
  ?>
  <hr>
</body>
</html>
