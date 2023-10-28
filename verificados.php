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
        <div class="row corpo justify-content-center align-items-center justify-content-md-start">
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
            $offset = ($pagina_atual - 1) * $resultados_por_pagina;
            $verificado = 'Sim por ' . $_SESSION['Id moderador'];
            $reprovado = 'Reprovado por ' . $_SESSION['Id moderador'];

            if (isset($_GET['peça'])) {
                $peca = $_GET['peça'];
                if ($peca == 'Toda') {
                    $query = "SELECT * FROM `modelo` WHERE (`Verificado` = ? OR `Verificado` = ?) ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("ssii", $verificado, $reprovado, $offset, $resultados_por_pagina);
                } elseif ($peca == 'Sustentável') {
                    $query = "SELECT * FROM `modelo` WHERE (`Sustentável` = 'Sim' AND (`verificado` = ? OR `verificado` = ?)) ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("ssii", $verificado, $reprovado, $offset, $resultados_por_pagina);
                } else {
                    $query = "SELECT * FROM `modelo` WHERE ((`Tipo` = ? AND `verificado` = ?) OR `verificado` = ?) ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("ssssii", $peca, $verificado, $reprovado, $offset, $resultados_por_pagina);
                }
            } else {
                $query = "SELECT * FROM `modelo` WHERE (`verificado` = ? OR `verificado` = ?) ORDER BY `Id modelo` DESC LIMIT ?, ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ssii", $verificado, $reprovado, $offset, $resultados_por_pagina);
            }

            $stmt->execute();
            $res = $stmt->get_result();

            
            if ($res && mysqli_num_rows($res) > 0) {
                // Exibe as imagens dentro do laço `while`
                while ($row = mysqli_fetch_assoc($res)) {
                    if (isset($row['Capa'])) {
                        // Verificar se a coluna "Verificado" segue o padrão "Reprovado por número"
                        if (preg_match('/^Reprovado por \d+$/', $row['Verificado'])) {
                            $caminho_imagem = 'Arquivos/Reprovado.png'; // Usar a imagem "Reprovado.png"
                            echo '<div class="col-10 col-md-2 espaço">';
                            echo '<a href="ADMacesso.php?valor=' . $row['Id modelo'] . '">';
                            echo '<img src="' . $caminho_imagem . '" alt="Imagem" class="modelos w-100 imagem-dinamica" ' . $row['Id modelo'] . '">';
                            echo '</a>';
                            echo '<p class="text-truncate text-white">' . $row['Título'] . '</p>';
                            echo '</div>';
                        } else {
                            $caminho_imagem = $row['Capa']; // Usar a imagem da coluna "Capa"
                            echo '<div class="col-10 col-md-2 espaço">';
                            echo '<a href="ADMacesso.php?valor=' . $row['Id modelo'] . '">';
                            echo '<img src="' . $caminho_imagem . '" alt="Imagem" class="modelos w-100 imagem-dinamica" ' . $row['Id modelo'] . '">';
                            echo '</a>';
                            echo '<p class="text-truncate text-white">' . $row['Título'] . '</p>';
                            echo '</div>';
                        }
                    }
                }
            } else {
                echo '<p class="resultado">Nenhum modelo encontrado</p>';
            }
            ?>
            <div>
        <script>
                // Usar JavaScript para obter a largura e definir como o atributo de estilo 'height'
                document.addEventListener('DOMContentLoaded', function() {
                    var imagens = document.querySelectorAll('.imagem-dinamica');
                    imagens.forEach(function(imagem) {
                        var largura = imagem.clientWidth;
                        imagem.style.height = largura + 'px';
                    });
                });
            </script>
        <?php
        require_once('rodape.php');
        $conn->close();
        ?>
    </div>
</body>

</html>