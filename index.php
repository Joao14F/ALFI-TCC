<?php include('sessao.php'); ?>

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
            margin-top: 20px;
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
            margin-top: 20px;
        }

        .cadastro {
            border: 2px solid #8880FE;
            padding: 8px;
            border-radius: 30px;
            font-size: 1.5rem;
            width: 40%;
            background: #1B2029;
            color: #8880FE;
            margin-top: 20px;
        }

        .CadastraModelo:hover,
        .login:hover,
        .cadastro:hover {
            background: #8880FE;
            color: white;
            transition: 0.3s all;
        }

        .borda {
            border: 2px solid #444079;
        }

        .modelos {
            margin: 7px;
            border-radius: 10px;
            width: 250px;
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
                <?php
            if (isset($_SESSION['Id usuário'])) {
                echo '<a href="modelosCadastrados.php"><button class="login">Modelos Cadastrados</button></a>';
                echo '<a href="sair.php"><button class="cadastro">Sair</button></a>';
            } elseif (isset($_SESSION['Id moderador'])) {
                echo '<a href="adm.php"><button class="login">gerenciar modelos</button></a>';
                echo '<a href="sair.php"><button class="cadastro">Sair</button></a>';
            } 
            else{
                echo '<a href="login.php"><button class="login">Login</button></a>';
                echo '<a href="cadastro.php"><button class="cadastro">Cadastro</button></a>';
            }
            
            ?>
                    
                
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
        <div class="row">
            <?php
            include_once('conexao.php');
           
            // Define a quantidade de resultados a serem exibidos por página
            $resultados_por_pagina = 8;

            // Obtém o número da página atual a partir do parâmetro "pagina" na URL
            if (isset($_GET['pagina']) && is_numeric($_GET['pagina'])) {
                $pagina_atual = $_GET['pagina'];
            } else {
                $pagina_atual = 1;
            }

            // Calcula o deslocamento (offset) com base na página atual
            $offset = ($pagina_atual - 1) * $resultados_por_pagina;

            if (isset($_GET['peça'])) {
                $peca = $_GET['peça'];
                if ($peca == 'Toda') {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("ii", $offset, $resultados_por_pagina);
                } else {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `Tipo` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sii", $peca, $offset, $resultados_por_pagina);
                }
                $stmt->execute();
                $res = $stmt->get_result();
            } else {
                $sql = "SELECT `Capa`,`Id modelo` FROM `modelo` ORDER BY `Id modelo` DESC LIMIT $offset, $resultados_por_pagina";
                $res = mysqli_query($conn, $sql);
            }


            echo '<div>';
            if ($res && mysqli_num_rows($res) > 0) {
                // Exibe as imagens dentro do laço `while`
                while ($row = mysqli_fetch_assoc($res)) {
                    if (isset($row['Capa'])) { // Verifica se a chave 'Capa' está definida
                        $caminho_imagem = $row['Capa'];
                        echo '<a href="Acesso.php?valor=' . $row['Id modelo'] . '">';
                        echo '<img src="' . $caminho_imagem . '" alt="Imagem" class="modelos col-8 col-sm-8 col-md-8">';
                        echo '</a>';
                    }
                }
                echo '</div>';

                // Cria os links de paginação
                $sql_total = "SELECT COUNT(*) AS total FROM `modelo`";
                $res_total = mysqli_query($conn, $sql_total);
                $row_total = mysqli_fetch_assoc($res_total);
                $total_resultados = $row_total['total'];
                $total_paginas = ceil($total_resultados / $resultados_por_pagina);

                echo '<div class="row">';

                echo '<div class="pagination">';

                // Link para a página anterior, se não estiver na primeira página
                if ($pagina_atual > 1) {
                    echo '<a href="?pagina=' . ($pagina_atual - 1);
                    if (isset($_GET['peça'])) {
                        echo '&peça=' . urlencode($_GET['peça']);
                    }
                    echo '">Anterior</a>' . ' ';
                }

                // Links para as páginas individuais
                for ($i = 1; $i <= $total_paginas; $i++) {
                    echo '<a href="?pagina=' . $i;
                    if (isset($_GET['peça'])) {
                        echo '&peça=' . urlencode($_GET['peça']);
                    }
                    echo '">' . $i . '</a>' . ' ';
                }

                // Link para a próxima página, se não estiver na última página
                if ($pagina_atual < $total_paginas) {
                    echo '<a href="?pagina=' . ($pagina_atual + 1);
                    if (isset($_GET['peça'])) {
                        echo '&peça=' . urlencode($_GET['peça']);
                    }
                    echo '">Próxima</a>' . ' ';
                }


                echo '</div>';
                echo '</div>';
            } else {

                echo '<p style="color: azure;">Nenhuma imagem encontrada.</p>';
            }

            // Fecha a conexão com o banco de dados
            $conn->close();

            ?>
        </div>
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