<?php
if (isset($_POST['submit'])) {

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuário (`Nome usuário`, `E-mail usuário`, `Telefone usuário`, `Senha usuário`)
    VALUES ('$nome', '$email', '$telefone', '$senha')";
    $result = mysqli_query($conn, $sql);

    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagens/navlogo.png">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        body {
            background: #1B2029;
            color: white;
        }

        h1 {
            color: #8880FE;
            text-align: center;

        }

        main form input {
            background: #161923;
            color: rgba(166, 166, 166);
            border: 1px solid #040B18;
            border-radius: 8px;
        }

        main form input[type="submit"] {
            cursor: pointer;
            border: none;
            border-radius: 32px;
            background: #6C63FF;
            color: white;
            font-size: 1rem;
            transition: all .3s ease-in-out;
        }

        main form input[type="submit"]:hover {
            background: #5952d4;
        }

        a {
            color: #8880FE;
        }

        .form-group {
         margin: 10px 0px;
      }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
        <!--  <a href="index.php"><i class="fa-sharp fa-solid fa-angles-left fa-xl"></i>volta</a> -->
        </div>
        <main>
            <div class="row">
                <h1 class="col-12 col-sm-12 col-md-12">Crie sua conta</h1>
            </div>
            <form action="cadastro.php" method="POST">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="name">Insira seu nome</label>
                            <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="email">Insira seu E-mail</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="telefone">Insira seu telefone </label>
                            <input class="form-control" type="telefone" id="telefone" name="telefone" placeholder="Telefone" required>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="password">Insira sua senha</label>
                            <input class="form-control" type="password" id="senha" name="senha" placeholder="Senha" required>
                        </div>

                    </div>
                </div>
                <div class="row">
            <div class="col-0 col-sm-0 col-md-1"></div>
                <div class="col-12 col-sm-6 col-md-3">
                <p>Já possui uma conta? <a class="login" href="login.php">Login</a> </p>
                </div>
            </div>
                
                <div class="row">
                <div class="col-0 col-sm-0 col-md-1"></div>
                    <input type="submit" value="Cadastrar" id="button" name="submit" class="col-12 col-sm-12 col-md-10">
                </div>
            </form>
        </main>
    </div>
</body>

</html>