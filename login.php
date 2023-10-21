<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/png" href="imagens/logonav.png">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        * {
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #1B2029;
            color: white;
            font-weight: 500;
        }

        h1 {
            color: #8880FE;
            font-size: 3rem;
            padding: 15px;
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

        input[type="submit"] {
            cursor: pointer;
            border: none;
            border-radius: 32px;
            background: #6C63FF;
            color: white;
            font-size: 1.1rem;
            transition: all .3s ease-in-out;
        }

        form input[type="submit"]:hover {
            background: #5952d4;
        }

        p {
            padding: 15px;
        }

        a {
            color: #8880FE;
            padding: 0px 0px 0px 5px;
        }

        label {
            padding: 25px 0px 10px 10px;
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

        .form-control::placeholder {
            color: gray;
        }

        @media (max-width: 387px) {
            h1 {
                text-align: center;
                font-size: 1.5rem;
            }

            p {
                text-align: center;
                font-size: 10px;
            }

            input[type="submit"] {
                text-align: center;
            }
        }

        @media (max-width: 454px) {
            h1 {
                display: flex;
                justify-content: center;
                padding-top: 4.5rem;
                font-size: 2rem;
            }

            p {
                display: flex;
                justify-content: center;
                font-size: 10px;
            }

        }

        @media (max-width: 575px) {
            input[type="submit"] {
                width: 100px;
            }
        }

        @media (min-width: 118px) and (max-width: 767px) {
            h1 {
                display: flex;
                justify-content: center;
                padding-top: 3rem;
            }

            p {
                display: flex;
                justify-content: center;
            }
        }

        @media (min-width: 768px) and (max-width: 1200px) {
            h1 {
                display: flex;
                justify-content: center;
                padding-top: 4.5rem;
            }

            p {
                display: flex;
                justify-content: center;
            }
        }

        @media (min-width: 1201px) and (max-width: 2000px) {
            h1 {
                display: flex;
                justify-content: center;
                padding-top: 4.5rem;
            }

            p {
                display: flex;
                justify-content: center;
            }
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-10 col-md-12 col-xs-10 col-lg-12">
                <h1>Logue sua conta</h1>
            </div>
        </div>

        <form action="sessao.php" method="POST">

            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-sm-10 col-md-6 col-xs-6 col-lg-6">
                    <label for="password">E-mail</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-sm-10 col-md-6 col-xs-12 col-lg-6">
                    <label for="password">Senha</label>
                    <input class="form-control" type="password" id="senha" name="senha" placeholder="Senha" required>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-xs-4 col-lg-12">
                    <p>Não possui uma conta? <a class="Cadastro" href="cadastro.php">Cadastrar </a> </p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12"></div>
                <input class="col-0 col-xs-12 col-sm-2 col-md-1 justify-xs-center" type="submit" name="submit" value="Login">
            </div>
            <input type="hidden" name="valor" value="<?php echo isset($_GET['valor']) ? $_GET['valor'] : ''; ?>">
        </form>

        <?php
        $_GET['valor'];
        if (isset($_POST['submit'])) {
            include_once('sessao.php');
        }
        ?>
    </div>
</body>

</html>
