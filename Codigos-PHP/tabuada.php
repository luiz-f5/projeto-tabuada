<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Tabuada</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
  <hr>
  <hgroup>
    <h1>Projeto - Tabuada Quatro Operações</h1>
    <h2> Tabuada</h2>

  </hgroup>

  <form action="tabuada.php" method="get">
    <h3>Digite o número da tabuada </h3>
    <input type="number" name="num"> <br><br>
    <input value="Clique aqui!" type="submit">
    
  </form>
  <hr>
  <?php
  if (isset($_GET["num"])) {
    $tabuada = $_GET["num"];
    if ($tabuada == null) {
      echo "<br>Digite o número para a tabuada";
    } else {
      
      function operacao($sinal){
        $tabuada = $_GET["num"];
        echo "-----------------------------------------------<br>";
        echo "<b>TABUADA DO $tabuada ($sinal)</b> <br>";
        echo "-----------------------------------------------<br>";
      }
      
      for($y = 1; $y <= 4; $y++){
          if($y == 1){
            operacao("ADIÇÃO");
          } elseif ($y == 2) {
            operacao("SUBTRAÇÃO");
          } elseif ($y ==3){
            operacao("MULTIPLICAÇÃO");
          } else {
            operacao("DIVISÃO");
          }
         
      for ($x = 1; $x <= 10; $x++) {
        if ($y == 1){
          echo  "$tabuada + $x = " . $tabuada+$x . "<br>";
        } elseif ($y == 2) {
          echo "$tabuada - $x = " . $tabuada-$x . "<br>";
        } elseif ($y == 3) {
          echo "$tabuada * $x = " . $tabuada*$x . "<br>";
        } else {
          echo "$tabuada / $x = " . round($tabuada/$x, 2) . "<br>";
        }
       
      }
      echo "-------------------------------------------------<br>";
      
    }
  }
  }
  ?>
  <hr>
  
</body>
</html>