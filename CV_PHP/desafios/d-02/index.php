<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Soteador de numeros</title>
</head>

<body>
  <header>
    <h1>Trabalhandoo com números aleatorios</h1>
  </header>

  <main>
    <?php
      $num = rand(0, 100);
      echo "Gerando um número aleatório entre 0 e 100";

      echo "<p>O número gerado foi: <strong>$num</strong></p>"; 
    

    ?>
    <button onclick="history.go(0)">Gerar outro</button>


  </main>

</body>

</html>