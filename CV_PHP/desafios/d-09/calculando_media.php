<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>caulando media</title>
</head>

<body>
  <?php 
    
    $nota1 = $_GET["nota1"] ?? 1;
    $pesoNota1 = $_GET["pesoNota1"] ?? 1;
    $nota2 = $_GET["nota2"] ?? 1;
    $pesoNota2 = $_GET["pesoNota2"] ?? 1;

    $mediaAritimeticaSimples = ($nota1 + $nota2) / 2;
    $mediaAritimeticaPonderada = ($nota1 * $pesoNota1 + $nota2 * $pesoNota2) / ($pesoNota1 + $pesoNota2);

  ?>
  <main>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
      <label for="nota1">Nota 1</label>
      <input type="number" name="nota1" id="nota1">
      <label for="pesoNota1'">Peso da nota 1</label>
      <input type="number" name="pesoNota1" id="pesoNota1">
      <label for="nota2">Nota 2</label>
      <input type="number" name="nota2" id="nota2">
      <label for="pesoNota2">Peso da nota 2</label>
      <input type="number" name="pesoNota2" id="pesoNota2">
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h1>Resultados media aritmética simples</h1>
    <?php
      echo "<p>A media aritimatica simples de $nota1 e $nota2 e igual a $mediaAritimeticaSimples</p>";
      echo "<p>A media aritimtica ponderada de $nota1 e $nota2 e igual a $mediaAritimeticaPonderada</p>";
    ?>



  </section>
</body>

</html>