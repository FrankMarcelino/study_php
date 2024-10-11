<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calcular raizes</title>
</head>

<body>
  <?php
    $num = $_GET["numero"] ?? 0;
    $raizQuadrada = sqrt($num);
    $raizCubica = pow($num, 1/3);
  ?>
  <main>
    <h1>calcular raizes</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
      <label for="numero">numero:</label>
      <input type="number" name="numero" id="numero">

      <input type="submit" value="calcular">
    </form>

    <section>
      <h1>Resultados</h1>
      <div>
        <p>A raiz quadrada de <?php echo $num ?> e igual a <?php echo $raizQuadrada ?></p>
        <p>A raiz cubica de <?php echo $num ?> e igual a <?php echo $raizCubica ?></p>
      </div>
    </section>
</body>

</html>