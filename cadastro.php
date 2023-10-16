<?php
if (isset($_POST['submit'])) {

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $query = 'SELECT `E-mail usuário` FROM `usuário`';
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($email !== $res) {
        $query = 'SELECT `E-mail moderador` FROM `moderador`';
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $res = $stmt->get_result();
        if ($email !== $res) {
            $sql = "INSERT INTO usuário (`Nome usuário`, `E-mail usuário`, `Telefone usuário`, `Senha usuário`)
        VALUES ('$nome', '$email', '$telefone', '$senha')";
            $result = mysqli_query($conn, $sql);

            header('Location: login.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagens/logonav.png">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        * {
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #1B2029;
            color: white;
        }

        h1 {
            color: #8880FE;
            text-align: center;
        }

        input.form-control {
            background: #161923;
            outline: none;
            color: rgba(166, 166, 166);
            font-size: 1rem;
            border: 1px solid #040B18;
            border-radius: 8px;
            margin: 5px;
        }


        form input {
            background: #161923;
            color: rgba(166, 166, 166);
            border: 1px solid #040B18;
            border-radius: 8px;
        }

        input[type="submit"] {
            cursor: pointer;
            border: none;
            border-radius: 32px;
            background: #6C63FF;
            color: white;
            font-size: 1rem;
            transition: all .3s ease-in-out;
        }

        form input[type="submit"]:hover {
            background: #5952d4;
        }

        a {
            color: #8880FE;
            padding-left: 5px;
        }


        input {
            background: #161923;
            width: 300px;
            height: 50px;
            padding: 0 0.5rem;
            margin-top: 1rem;
            outline: none;
            color: rgba(166, 166, 166);
            font-size: 1rem;
            border: 1px solid #040B18;
            border-radius: 8px;
        }

        label {
            padding: 10px 0px 10px 10px;
        }


        @media (max-width: 387px) {
            h1 {
                text-align: center;
                font-size: 1.5rem;
            }

            p {
                text-align: center;
                font-size: 10px;
                padding: 5px;
            }

            input[type="submit"] {
                text-align: center;
            }
        }

        @media (max-width: 454px) {
            h1 {
                display: flex;
                justify-content: center;
                padding-top: 2.5rem;
                font-size: 2rem;
            }

            p {
                display: flex;
                justify-content: center;
                font-size: 10px;
                padding: 5px;
            }

        }

        @media (max-width: 1300px) {
            input[type="submit"] {
                width: 120px;
            }
        }

        @media (min-width: 118px) and (max-width: 767px) {
            h1 {
                display: flex;
                justify-content: center;
                padding-top: 2.5rem;
            }

            p {
                display: flex;
                justify-content: center;
                padding: 5px;
            }
        }

        @media (min-width: 768px) and (max-width: 1200px) {
            h1 {
                display: flex;
                justify-content: center;
                padding-top: 2.5rem;
            }

            p {
                display: flex;
                justify-content: center;
                padding: 5px;
            }
        }

        @media (min-width: 1201px) and (max-width: 2000px) {
            h1 {
                display: flex;
                justify-content: center;
                padding-top: 2.5rem;
            }

            p {
                display: flex;
                justify-content: center;
                padding: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-10 col-md-12 col-xs-10 col-lg-12">
                <h1>Crie sua conta</h1>
            </div>
        </div>
        <form action="cadastro.php" method="POST">
            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-sm-8 col-md-6 col-xs-6 col-lg-6">
                    <label for="name">Insira seu nome</label>
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-sm-8 col-md-6 col-xs-12 col-lg-6">
                    <label for="email">Insira seu E-mail</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-sm-8 col-md-6 col-xs-12 col-lg-6">
                    <label for="telefone">Insira seu telefone </label>
                    <input class="form-control" type="tel" id="telefone" name="telefone" placeholder="Telefone" required>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-sm-8 col-md-6 col-xs-12 col-lg-6">
                    <div class="form-group">
                        <label for="password">Insira sua senha</label>
                        <input class="form-control" type="password" id="senha" name="senha" placeholder="Senha" required>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-xs-4 col-lg-12">
                        <p>Já possui uma conta? <a class="login" href="login.php">Login</a> </p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12"></div>
                    <input class="col-0 col-xs-12 col-sm-2 col-md-1" type="submit" value="Cadastrar" id="button" name="submit" class="col-12 col-sm-12 col-md-10">
                </div>
        </form>
    </div>
</body>

</html>
