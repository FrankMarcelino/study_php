<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>anatomia de uma divisão</title>
</head>

<body>
  <main>
    <h1>anatomia de uma divisão</h1>
    <?php
    $num = $_GET["num"] ?? 1;
    $div = $_GET["div"] ?? 1;
    $resto = $num % $div;
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
      <label for="num">Número:</label>
      <input type="number" name="num" id="num" value="<?= $num ?>">
      <label for="div">Divisor:</label>
      <input type="number" name="div" id="div" value="<?= $div ?>">
      <input type="submit" value="Calcular">
    </form>
    <section>
      <h1>Estrutura da divisão</h1>
      <table class="divisao">
        <tr>
          <td><?= $num ?></td>
          <td><?= $div ?></td>

        </tr>
        <tr>
          <td><?= floor($num / $div) ?></td>
          <td><?= $resto ?></td>
        </tr>
      </table>


    </section>

  </main>

</body>

</html>