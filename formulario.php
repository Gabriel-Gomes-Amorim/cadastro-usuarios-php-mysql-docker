<?php
    //Iniciar a sessão
    session_start();

   if(isset($_POST['submit']))
   {
     include_once('config.php');

     //pegar dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "INSERT INTO usuarios(name,email,password) 
    VALUES ('$name','$email','$password')");

    //finalizar conexão com database
    mysqli_close($conn);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Formulário de Registro</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>CADASTRO DE USUÁRIO</h1>
    <form action="formulario.php" method="POST">
      <label for="name">Nome:</label>
      <input type="text" id="name" name="name" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="password">Senha:</label>
      <input type="password" id="password" name="password" required />

      <input type="submit" name="submit" id="submit" />
    </form>
  </body>
</html>
