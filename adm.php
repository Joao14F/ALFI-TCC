<?php include('sessao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagens/logonav.png">
    <title>Index</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">



    <style>
        .modelos {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php
        require_once('cabecalho.php');
        require('logadoADM.php');
        include_once('conexao.php');
        include('paginaçaoVar.php');
        ?>

        <div class="row justify-content-center align-items-center justify-content-md-start" style="margin: 0px 8px;">
            <?php
            if (isset($_GET['peça'])) {
                $peca = $_GET['peça'];
                $verificado = 'Não';
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

            if ($res && mysqli_num_rows($res) > 0) {
                // Exibe as imagens dentro do laço `while`
                while ($row = mysqli_fetch_assoc($res)) {
                    if (isset($row['Capa'])) { // Verifica se a chave 'Capa' está definida
                        $caminho_imagem = $row['Capa'];
                        echo '<div class="col-10 col-sm-10 col-md-2 gy-1 gx-4">';
                        echo '<a href="Acesso.php?valor=' . $row['Id modelo'] . '">';
                        echo '<img src="' . $caminho_imagem . '" alt="Imagem" class="modelos img-fluid">';
                        echo '</a>';
                        echo '<p class="text-truncate text-white">' . $row['Título'] . '</p>';
                        echo '</div>';
                    }
                }
            } else {
                echo '<p class="resultado">Nenhum modelo encontrado</p>';
            }
            ?>
        </div>

        <?php
        require_once('paginaçao.php');
        require_once('rodape.php');
        $conn->close();
        ?>


</body>

</html>