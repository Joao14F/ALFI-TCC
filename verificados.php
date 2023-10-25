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
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <div class="container-fluid">
        <?php
        require_once('cabecalho.php');
        require('logadoADM.php');
        include('paginaçaoVar.php');
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
            $verificado = 'Sim' . ' ' . 'por' . ' ' . $_SESSION['Id moderador'];
            if (isset($_GET['peça'])) {
                $peca = $_GET['peça'];
                if ($peca == 'Toda') {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `verificado` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sii", $verificado, $offset, $resultados_por_pagina);
                } elseif ($peca == 'Sustentável') {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `Sustentável` = 'Sim' AND `verificado` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sii", $verificado, $offset, $resultados_por_pagina);
                } else {
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
                        echo '<div class="col-12 text-center col-xs-12 col-sm-4 col-md-2 col-lg-2 gy-4 gx-4">';
                        echo '<a href="ADMacesso.php?valor=' . $row['Id modelo'] . '">';
                        echo '<img src="' . $caminho_imagem . '" alt="Imagem" class="modelos img-fluid h-100">';
                        echo '</a>';
                        echo '</div>';
                    }
                }
                echo '</div>';

                require('paginaçao.php');
            } else {

                echo '<p style="color: azure; padding-top: 10px;">Nenhuma imagem encontrada.</p>';
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