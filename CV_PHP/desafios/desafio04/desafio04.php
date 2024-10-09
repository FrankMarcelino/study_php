<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado da conversão</title>
</head>

<body>
  <?php
    $real = $_GET["real"];
    
    // Consome a API para pegar a cotação do dólar
    $json = file_get_contents("https://economia.awesomeapi.com.br/json/all/USD-BRL");
    $data = json_decode($json, true);
    
    $dolar = $data["USD"]["bid"];

    $resultado = $real / $dolar;

    $resultado = number_format($resultado, 2, ",", ".");
  ?>

  <main>
    <h1>Conversor de moedas v2.0</h1>
    <div>
      <p>
        <?php
          echo "Seus R$ $real equivale a US$ <strong>$resultado </strong>";
        ?>
      </p>
      <p>*Cotação obitida diretamente do site do <a href="https://www.bcb.gov.br/">Banco Central do Brasil</a></p>
      <a href="index.html">Voltar</a>

    </div>
</body>

</html>