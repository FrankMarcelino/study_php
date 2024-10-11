<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculando Idade</title>
</head>

<body>

  <?php

    $ano = $_GET["ano"] ?? 0;
    $anoatual = $_GET["anoatual"] ?? date("Y");
    $idade = $anoatual - $ano;

  ?>
  <main>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">

      <label for="ano">Ano de nascimento:</label>
      <input type="number" name="ano" id="ano">
      <label for="ano">Ano atual:</label>
      <input type="number" name="anoatual" id="anoatual" value="<?= $anoatual ?>">
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h1>Resultados</h1>
    <p>Você tem <?= $idade ?> anos</p>
  </section>

</body>

</html>