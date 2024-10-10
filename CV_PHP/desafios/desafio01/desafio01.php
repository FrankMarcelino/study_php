<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado Final</title>
</head>

<body>
  <Header>
    <h1>RESULTADO FINAL</h1>
  </Header>

  <main>
    <?php
      $num = $_GET["num"];
      $anterior = $num - 1;
      $sucessor = $num + 1;

      echo "<p>O número escolhido foi: $num</p>";
      echo "<p>O numero anterior é: $anterior</p>";
      echo "<p>O numero sucessor é: $sucessor</p>";
   ?>
    <p><a href="index.html">&#x2B05; Voltar</a></p>
  </main>

</body>

</html>