<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagens/navlogo.png">
    <title>Index</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Global styles */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        * {
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #1B2029;
            font-family: Arial, sans-serif;
            background: #1B2029;
        }

        /* Header styles */
        header {
            background-color: #1B2029;
        }

        a.logo img {
            width: 35%;
        }

        .CadastraModelo {
            border: 2px solid #8880FE;
            padding: 8px;
            border-radius: 30px;
            font-size: 1.5rem;
            width: 60%;
            background: #1B2029;
            color: #8880FE;
        }

        .login {
            border: 2px solid #8880FE;
            padding: 8px;
            border-radius: 30px;
            font-size: 1.5rem;
            width: 30%;
            background: #1B2029;
            margin-right: 2rem;
            color: #8880FE;
        }

        .cadastro {
            border: 2px solid #8880FE;
            padding: 8px;
            border-radius: 30px;
            font-size: 1.5rem;
            width: 40%;
            background: #1B2029;
            color: #8880FE;
        }

        .CadastraModelo:hover,
        .login:hover,
        .cadastro:hover {
            background: #8880FE;
            color: white;
            transition: 0.3s all;
        }

        select {
            border: 2px solid #444079;
        }

        .Titulo {
            background-color: aliceblue;
        }

        /* Footer styles */
        footer {
            font-size: 12px;
            background: #1B2029;
            height: 2.5rem;
            /* altura do rodapé */
        }

        h2 {
            font-size: 22px;
        }

        .caixote {
            width: 100%;
            background: #1B2029;
        }

        .sec h2 {
            color: white;
            font-weight: 600;
        }

        .sec p {
            color: #d9d9d9;
            padding-top: 0.1rem;
            text-align: justify;
            line-height: 2;
        }

        .quicklinks h2 {
            color: white;
            font-weight: 600;
        }

        .quicklinks ul li {
            list-style: none;
        }

        .quicklinks ul li a {
            color: #d9d9d9;
            text-decoration: none;
        }

        .quicklinks ul li a:hover {
            color: #8880FE;
            transition: 0.3s all;
        }

        .contact h2 {
            color: white;
            font-weight: 600;
        }

        .contact ul li span {
            font-size: 20px;
        }

        .contact ul li a {
            color: #d9d9d9;
            text-decoration: none;
        }

        .contact ul li i {
            color: white;
        }

        .xinga {
            cursor: pointer;
            width: 15%;
            border: none;
            border-radius: 32px;
            background: white;
            color: #161923;
            font-size: 0.9rem;
            transition: all .3s ease-in-out;
            text-align: center;
            padding: 5px;
            text-decoration: none;
        }

        .xinga:hover {
            background: #d9d9d9;
        }

        .copyrightText {
            width: 100%;
            padding: 8px;
            text-align: center;
            color: white;
            background: #1f252f;
            border-top: 1px solid rgba(0, 0, 0, 0.15);
            border-color: #8880FE;
        }

        .copyrightText p {
            color: white;
        }
    </style>
</head>

<body>
    <?php
    include('conexao.php');
    ?>
    <div class="container-fluid">
        <header>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3">
                    <a class="logo" href="index.php">
                        <img src="imagens/logo.png" alt="logo!">
                    </a>
                </div>
                <div class="botões col-12 col-sm-12 col-md-4">
                    <a href="CadastrarModelo.php"><button class="CadastraModelo">Cadastrar Modelo</button></a>
                </div>

                <div class="botões col-12 col-sm-12 col-md-4">
                    <a href="login.php"><button class="login">Login</button></a>
                    <a href="cadastro.php"><button class="cadastro">Cadastro</button></a>
                </div>
                <div class="col-md-1"></div>
            </div>
        </header>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <select id="select" onchange="trocarPagina()" class="form-select borda">
                    <option hidden> <?php
                                    if (isset($_GET['peça'])) {
                                        $peca = $_GET['peça'];
                                        echo $peca . "s";
                                    } else {
                                        echo 'Selecione o tipo de peça desejado';
                                    }
                                    ?></option>
                    <option value="index.php" data-peca="Toda">Todas as peças</option>
                    <option value="index.php" data-peca="Saia">Saias</option>
                    <option value="index.php" data-peca="Calça">Calças</option>
                    <option value="index.php" data-peca="Bermuda">Bermudas</option>
                </select>
                <script>
                    function trocarPagina() {
                        var select = document.getElementById("select");
                        var paginaSelecionada = select.options[select.selectedIndex].value;
                        var tipoPeca = select.options[select.selectedIndex].getAttribute("data-peca");

                        if (paginaSelecionada !== "") {
                            window.location.href = paginaSelecionada + "?peça=" + encodeURIComponent(tipoPeca);
                        }
                    }
                </script>
            </div>
        </div>
        <!--<div class="row"><div class="col-12 col-sm-12 col-md-12"></div></div>-->
        <?php
        include_once('conexao.php');
        if (isset($_GET['valor'])) {
            $valor = $_GET['valor'];

            // Consulta para buscar o título, capa e tipo do modelo
            $sql = "SELECT `Título`, `Capa`, `Moldes`, `Tipo` FROM `modelo` WHERE `Id modelo` = $valor";
            $res = mysqli_query($conn, $sql);

            if ($res && mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                $Titulo = $row['Título'];
                echo '<div class="row">' . '<h1 class="col-12 col-sm-12 col-md-12 Titulo">' . $Titulo . '</h1>' . '</div>';

                $endereco_capa = $row['Capa'];
                if ($endereco_capa) {
                    echo '<div class="row">' . '<img src="' . $endereco_capa .  '"alt="Imagem" class="col-12 col-sm-12 col-md-12">' . '</div>';
                } else {
                    echo 'Falha ao buscar imagem.';
                }

                $Moldes = $row['Moldes'];
                $Moldes = explode(',', $Moldes);
                foreach ($Moldes as $Molde) {
                    echo '<div class="row">' . '<img src="' . $Molde .  '"alt="Imagem" class="col-12 col-sm-12 col-md-12">' . '</div>';
                }

                $Tipo = $row['Tipo'];
                if ($Tipo == 'Saia') {
                    $sqlMedidas = "SELECT `Comprimento`, `Quadril`, `Cintura` FROM `modelo` WHERE `Id modelo` = $valor";
                    $resMedidas = mysqli_query($conn, $sqlMedidas);

                    if ($resMedidas && mysqli_num_rows($resMedidas) > 0) {
                        $rowMedidas = mysqli_fetch_assoc($resMedidas);
                        $Comprimento = $rowMedidas['Comprimento'];
                        $Quadril = $rowMedidas['Quadril'];
                        $Cintura = $rowMedidas['Cintura'];
                        echo '<p style="color: azure;">' . $Comprimento . $Quadril . $Cintura . '</p>';
                    }
                } elseif ($Tipo == 'Bermuda' || $Tipo == 'Calça') {
                    $sqlMedidas = "SELECT `Comprimento`, `Quadril`, `Cintura`, `Gancho` FROM `modelo` WHERE `Id modelo` = $valor";
                    $resMedidas = mysqli_query($conn, $sqlMedidas);

                    if ($resMedidas && mysqli_num_rows($resMedidas) > 0) {
                        $rowMedidas = mysqli_fetch_assoc($resMedidas);
                        $Comprimento = $rowMedidas['Comprimento'];
                        $Quadril = $rowMedidas['Quadril'];
                        $Cintura = $rowMedidas['Cintura'];
                        $Gancho = $rowMedidas['Gancho'];
                        echo $Comprimento . $Quadril . $Cintura . $Gancho;
                    }
                }
            } else {
                echo '<script>alert("Erro ao carregar o modelo"); window.location.href = "index.php";</script>';
            }
        }
        ?>
        <footer>
            <div class="caixote">
                <div class="row">
                    <div class="sec sobrenos col-12 col-sm-12 col-md-4">
                        <h2>Sobre Nós</h2>
                        <p>O ALFI é um site de compartilhamento de moldes de roupas,
                            focado em disponibilizar aos usúarios uma plataforma para
                            obter e compartilhar os moldes das roupas desejedas pelos mesmos.
                        </p>
                    </div>

                    <div class="sec quicklinks col-12 col-sm-12 col-md-4">
                        <h2>Suporte</h2>
                        <ul>
                            <li><a href="FAQ.php">FAQ</a></li>
                            <li><a href="pdep.php">Política de Privacidade</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm12 col-md-4">
                        <div class="sec contact">
                            <h2>Entre em Contato</h2>
                            <ul class="info">
                                <li>
                                    <p>Caso queira enviar alguma sugestão, solicitação ou mensagem, você pode nos contatar clicando no botão abaixo ou através do e-mail: <a href="mailto:teamalfi2023@gmail.com" class="mail">teamalfi2023@gmail.com</a></p>
                                </li>
                                <a class="xinga" href="testeform.php">Contato</a>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="copyrightText">
                        <p>Copyright © 2023 ALFI All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>