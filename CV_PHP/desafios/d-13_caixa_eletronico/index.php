<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>caixa eletronico</title>
  <style>
  img.nota {
    height: 50px;

  }
  </style>
</head>

<body>
  <?php

    $valor = $_GET["valor"] ?? 0;
    $resto = $valor;

    $tot100 = floor($resto / 100);
    $resto = $resto % 100;
    $tot50 = floor($resto / 50);
    $resto = $resto % 50;
    $tot20 = floor($resto / 20);
    $resto = $resto % 20;
    $tot5 = floor($resto / 5);
  ?>
  <main>
    <h1>Caixa eletronico</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
      <label for="valor">Qual valor deseja sacar?(R$)<sup>*</sup></label>
      <input type="number" name="valor" id="valor" step="5" required value="<?php echo $_GET["valor"] ?? 0 ?>">
      <p style="font-size: 0.7em;"><sup>*</sup>Notas disponiveis: R$100, R$50, R$20 e R$5 </p>
      <input type="submit" value="Sacar">
    </form>
  </main>
  <section>
    <h2>Saque de R$[<?= $valor ?>] realizado</h2>
    <p>Recolha o seu dinheiro</p>
    <ul>
      <li><img class="nota" src="img/100-reais.jpg" alt="nota de 100"> x<?= $tot100 ?></li>
      </li>
      <li><img class="nota" src="img/50-reais.jpg" alt="nota de 50"> x<?= $tot50 ?></li>
      <li><img class="nota" src="img/20-reais.jpg" alt="nota de 20"> x<?= $tot20 ?></li>
      <li><img class="nota" src="img/5-reais.jpg" alt="nota de 5"> x<?= $tot5 ?></li>
    </ul>
  </section>
</body>

</html>