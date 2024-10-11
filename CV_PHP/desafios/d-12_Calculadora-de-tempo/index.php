<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calculadora de tempo</title>
</head>

<body>
  <main>
    <h1>calculadora de tempo</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
      <label for="tempo">Tempo em segundos:</label>
      <input type="number" name="tempo" id="tempo">
      <input type="submit" value="Calcular">
    </form>

    <?php
    $tempo = $_GET["tempo"] ?? 0;
    $horas = floor($tempo / 3600);
    $minutos = floor(($tempo % 3600) / 60);
    $segundos = $tempo % 60;
    ?>
    <p><?php echo "$horas:$minutos:$segundos"; ?></p>
  </main>
</body>

</html>