<?php include('sessao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagens/logonav.png">
    <title>Página Inicial</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <div class="container-fluid">
        <?php
        require_once('cabecalho.php')
        ?>

        <div class="row" style="margin: 0px 8px;">
            <?php
            include_once('conexao.php');
            include('paginaçaoVar.php');

            if (isset($_GET['peça'])) {
                $peca = $_GET['peça'];
                if ($peca == 'Toda') {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("ii", $offset, $resultados_por_pagina);
                } elseif ($peca == 'Sustentável') {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `Sustentável` = 'Sim' ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("ii", $offset, $resultados_por_pagina);
                } else {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `Tipo` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sii", $peca, $offset, $resultados_por_pagina);
                }
            } else {
                $query = "SELECT `Capa`, `Id modelo` FROM `modelo` ORDER BY `Id modelo` DESC LIMIT ?, ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ii", $offset, $resultados_por_pagina);
            }
            $stmt->execute();
            $res = $stmt->get_result();


            if ($res && mysqli_num_rows($res) > 0) {
                // Exibe as imagens dentro do laço `while`
                while ($row = mysqli_fetch_assoc($res)) {
                    if (isset($row['Capa'])) { // Verifica se a chave 'Capa' está definida
                        $caminho_imagem = $row['Capa'];
                        echo '<div class="col-12 col-sm-12 col-md-2 gy-4 gx-4">';
                        echo '<a href="Acesso.php?valor=' . $row['Id modelo'] . '">';
                        echo '<img src="' . $caminho_imagem . '" alt="Imagem" class="modelos img-fluid h-100">';
                        echo '</a>';
                        echo '</div>';
                    }
                }
                echo '</div>';

                require('paginaçao.php');
            } else {

                echo '<p style="color: white;">Nenhuma imagem encontrada.</p>';
            }

            // Fecha a conexão com o banco de dados
            $conn->close();

            ?>

            <?php
            require_once('rodape.php')
            ?>
        </div>
</body>

</html>