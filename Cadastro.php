<?php


$conn = new mysqli('Localhost', 'root', '','sitem');

 

  if($conn->connect_error) {
      die("Erro: " . $conn->connect_error);
  }

  if($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $conn->query("INSERT INTO cadastro (nome, email, senha)
      VALUES ('$nome', '$email', '$senha')");

  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>CADASTRO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="cadas.css">
</head>
<body>
    <div class="box">
            <fieldset>
                <legend> <h1>CADASTRO</h1> </legend>

                <form action="Cadastro.php" method="POST">
                    <div class="input">
                        <label for="nome">Nome de Usuário</label>
                        <input type="text" name="nome" id="nome" class="inputUser" required> 
                    </div>
                    <br><br>
                    <div class="input">
                        <label for="nome">Email</label>
                        <input type="text" name="email" id="email" class="inputUser" required>                 
                    </div>              
                    <br><br>
                    <div class="input">
                        <label for="nome">Senha</label>
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                    </div>
                    <br><br>
                    <div class="login">
                        <p>Já tem uma conta? <a href="Login.html">Faça login</a></p>
                    </div>              
                    <button class="btn" type="submit" onclick="">Enviar</button>
                </form>              
            </fieldset>             
    </div>
</body>
</html>
