<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salario Minimo</title>
</head>

<body>
  <?php
  $salario = $_GET["salario"] ?? 0;
  $salarioMinimo = 1573.94;

  $resultado = $salario / $salarioMinimo;
  
  $resultado = number_format($resultado, 0, ",", ".");
  $sobra = $salario % $salarioMinimo;


  ?>
  < <main>
    <h1>informe seu salario</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
      <label for="salario">Salario:</label>
      <input type="number" name="salario" id="salario" value="<?= $salario ?? 0 ?>">
      <input type="submit" value="Calcular">
    </form>
    </main>
    <section class="result">
      <h1>Resultado final</h1>

      <?php
      echo "<p> Quem recebe uma salario de $salario, ganha  $resultado salarios minimos + $sobra reais </p>";
      ?>
    </section>


    </main>



</body>

</html>