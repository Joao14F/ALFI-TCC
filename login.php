<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/png" href="imagens/navlogo.png">

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
            text-align: center;
        }

        form label span {
            font-size: 1.1rem;
        }

        form input {
            background: #161923;
            outline: none;
            color: rgba(166, 166, 166);
            font-size: 1rem;
            border: 1px solid #040B18;
            border-radius: 8px;
        }

        form input[type="submit"] {
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

        section.images .circle {
            background: linear-gradient(45deg, #E8CBC0, #636FA4);
            clip-path: circle(40% at right 80%);
        }

        a {
            color: #8880FE;
        }

        i {
            color: white;
        }

        form input:focus {
            border-color: #6C63FF !important;
            box-shadow: 0 0 0 0.25rem rgba(108, 99, 255, 0.25) !important;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <!-- <a href="index.php"><i class="fa-sharp fa-solid fa-angles-left fa-xl"></i></a>-->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <h1>Logue sua conta</h1>
            </div>
        </div>



        <form action="sessao.php" method="POST">

            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 col-sm-10 col-md-10">
                    <label for="password">E-mail</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required>
                </div>
            </div>



            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 col-sm-10 col-md-10">
                    <label for="password">Senha</label>
                    <input class="form-control" type="password" id="senha" name="senha" placeholder="Senha" required>
                </div>
            </div>





            <div class="row">
            <div class="col-0 col-sm-0 col-md-1">
                    <p></p>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <p> Não possui uma conta? <a class="Cadastro" href="cadastro.php">Cadastrar </a> </p>
                </div>
            </div>

            <div class="row">
                <div class="col-0 col-sm-0 col-md-1">
                    <p></p>
                </div>
                <div class="">
                    <input class="col-0 col-sm-0 col-md-10" type="submit" name="submit" value="Login">
                </div>
            </div>

        </form>

        <?php
        if (isset($_POST['submit'])) {
            include_once('sessao.php');
        }
        ?>
    </div>
</body>

</html>