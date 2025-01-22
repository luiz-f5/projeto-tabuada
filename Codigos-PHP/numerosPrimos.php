<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Primos</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
  <hr>
  <hgroup>
    <h1>Primos</h1>
    <h2>Números Primos</h2>
  </hgroup>

  <form action="numerosPrimos.php" method="get">
    Digite o número: <input type="number" name="num">
    <input value="Clique aqui!" type="submit">

  </form>

  <?php
  if (isset($_GET["num"])) {
    $num = $_GET["num"];
    $p = 0;
    $i = 0;
    if ($num == null) {
      echo "<br><b>Digite por favor um número acima :)</b";
    } else {
      for ($x = 1; $x <= $num; $x++) {
        if ($num % $x == 0) {
          $p++;
        } else {
          $i++;
        }

      }


      if ($p <= 2 && $num > 1) {
        echo "<br>Número digitado: " . $num .  "<br>"; 
        echo "<br><b>Este número é primo!</b>";
      } else {
        echo "<br>Número digitado: " . $num .  "<br>"; 
        echo "<br><b>Este número não é primo!</b>";
      }

    }
  }


  ?>
  <hr>
</body>
</html>
