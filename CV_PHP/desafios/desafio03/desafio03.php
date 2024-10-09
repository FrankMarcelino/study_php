<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Valor convertido</title>
</head>

<body>

  <?php
    $real = $_GET["real"];
    $dollar = $real / 5.25;
    $dollar = number_format($dollar, 2, ",", ".");
  ?>

  <main>
    <h1>Conversor de moedas v1.0</h1>
    <div>
      <p>
        <?php
          echo "Seus R$ $real equivale a US$ <strong>$dollar </strong>";
        ?>
      </p>
      <p>*<strong>Cotação atual: R$ 5.25</strong></p>
      <a href="desafio03.php">Voltar</a>
    </div>
  </main>


</body>

</html>