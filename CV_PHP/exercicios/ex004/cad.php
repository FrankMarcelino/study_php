<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>RESULTADO</title>
</head>

<body>

  <header>
    <h1>RESULTADO</h1>
  </header>

  <main>
    <?php
      $email = $_GET["email"];
      $password = $_GET["password"];
      if($email == "" || $password == ""){
        echo "<p>Preencha todos os campos</p>";
      }else{
        echo "<p>E-mail: $email</p>";
        echo "<p>Senha: $password</p>";
      }
    ?>
    <p><a href="index.html">Voltar</a></p>
  </main>

</body>

</html>