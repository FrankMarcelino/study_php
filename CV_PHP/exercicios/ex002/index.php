<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Exemplo de PHP</h1>
  <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "hoje e dia " . date("d/m/Y");
    echo "<br>";
    echo  "e a hora atual " . date("H:i:s");
  ?>
</body>

</html>