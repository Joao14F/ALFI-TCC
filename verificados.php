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
        <?php
        require_once('cabecalho.php')
        ?>
        
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
                $verificado = 'Sim' . ' ' . 'por' . ' ' . $_SESSION['Id moderador'];
                if ($peca == 'Toda') {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `verificado` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sii", $verificado, $offset, $resultados_por_pagina);
                } elseif ($peca == 'Sustentável') {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `Sustentável` = 'Sim' AND `verificado` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sii", $verificado, $offset, $resultados_por_pagina);
                } 
                else{
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `Tipo` = ? AND `verificado` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("ssii", $peca, $verificado, $offset, $resultados_por_pagina);
                }
                
            } else {
                $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `verificado` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("sii", $verificado, $offset, $resultados_por_pagina);
            }
            $stmt->execute();
            $res = $stmt->get_result();


            echo '<div>';
            if ($res && mysqli_num_rows($res) > 0) {
                // Exibe as imagens dentro do laço `while`
                while ($row = mysqli_fetch_assoc($res)) {
                    if (isset($row['Capa'])) { // Verifica se a chave 'Capa' está definida
                        $caminho_imagem = $row['Capa'];
                        echo '<a href="ADMacesso.php?valor=' . $row['Id modelo'] . '">';
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
        <?php
        require_once('rodape.php')
        ?>
    </div>
</body>

</html>