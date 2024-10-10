<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado do analisador de numero real</title>
</head>

<body>

  <?php

    $numeroDigitado = $_GET["num"];

    $parteInteira = floor($numeroDigitado);
    $parteDecimal = $numeroDigitado - $parteInteira;
    $parteDecimal = number_format($parteDecimal, 2, ",", ".");
  ?>

  <main>
    <h1>Analisador de número real</h1>
    <div>
      <p>
        <?php
          echo "Seu número digitado foi: <strong>$numeroDigitado</strong>";
        ?>
      </p>
      <p>
        <?php
          echo "Seu número convertido para inteiro: <strong>$parteInteira</strong>";
        ?>
      </p>
      <p>
        <?php
          echo "Seu número convertido para decimal: <strong>$parteDecimal</strong>";
        ?>
      </p>
      <a href="desafio05.php">Voltar</a>
    </div>
</body>

</html>