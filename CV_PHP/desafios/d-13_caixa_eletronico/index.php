<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>caixa eletronico</title>
</head>

<body>
  <main>
    <h1>caixa eletronico</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
      <label for="valor">Valor:</label>
      <input type="number" name="valor" id="valor">
      <input type="submit" value="Sacar">
    </form>

    <?php
    $valor = $_GET["valor"] ?? 0;
    $nota100 = $valor / 100;
    $resto = $valor % 100;
    $nota50 = $resto / 50;
    $resto = $resto % 50;
    $nota20 = $resto / 20;
    $resto = $resto % 20;
    $nota10 = $resto / 10;
    $resto = $resto % 10;
    $nota5 = $resto / 5;
    $resto = $resto % 5;
    $nota2 = $resto / 2;
    $resto = $resto % 2;
    $nota1 = $resto / 1;
    $resto = $resto % 1;
    ?>
    <p>
      <?php
      echo "Notas de 100: $nota100 <br>";
      echo "Notas de 50: $nota50 <br>";
      echo "Notas de 20: $nota20 <br>";
      echo "Notas de 10: $nota10 <br>";
      echo "Notas de 5: $nota5 <br>";
      echo "Notas de 2: $nota2 <br>";
      echo "Notas de 1: $nota1 <br>";
      ?>
    </p>
  </main>
</body>

</html>