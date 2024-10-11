<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reajustador de preço</title>
</head>

<body>
  <main>
    <h1>Reajustador de precos</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
      <label for="preco">Preço:</label>
      <input type="number" name="preco" id="preco">
      <label for="quantidade">Qual será o pencentual de reajuste? (%)</label>
      <input type="range" name="quantidade" id="quantidade">
      <input type="submit" value="Calcular">
    </form>

  </main>

  <?php

    $preco = $_GET["preco"] ?? 0;
    $quantidade = $_GET["quantidade"] ?? 0;
    $quantidade = $quantidade / 100;
    $reajuste = $preco * $quantidade;

  ?>

  <section>

    <h1>Resultados</h1>

    <div>
      <p>Novo valor: <?php echo number_format($preco + $reajuste, 2, ",", "."); ?></p>
      <p>Aumento: <?php echo number_format($reajuste, 2, ",", "."); ?></p>
    </div>
</body>

</html>