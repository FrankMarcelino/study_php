<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <main>
    <pre>
      <?php
        setcookie("dia-da-semana", "quarta-feira", time() + 3600);
        session_start();
        $_SESSION["nome"] = "João";
        $_SESSION["idade"] = 20;
        $_SESSION["sexo"] = "M";
        $_SESSION["peso"] = 70.5;
      
        echo "<h1>Super Globais GET</h1>";
        var_dump($_GET);
        echo "<h1>Super Globais POST</h1>";
        var_dump($_POST);
        echo "<h1>Super Globais REQUEST</h1>";
        var_dump($_REQUEST);
        echo "<h1>Super Globais COOKIE</h1>";
        var_dump($_COOKIE);
        echo "<h1>Super Globais SESSION</h1>";
        var_dump($_SESSION);
        echo "<h1>Super Globais ENV</h1>";
        var_dump($_ENV);
      
        foreach (getenv() as $key => $value) {
          echo "<br>$key: $value";
        }
        echo "<h1>Super Globais SERVER</h1>";
        var_dump($_SERVER);

        echo "<h1>Super Globais GLOBALS</h1>";
        var_dump($GLOBALS);
      ?>
    </pre>
  </main>
</body>

</html>