<?php include('sessao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagens/logonav.png">
    <title>Modelos Cadastrados</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <div class="container-fluid">

        <?php
        require_once('cabecalho.php');
        include_once('conexao.php');
        include('paginaçaoVar.php');
        ?>
        <div class="row corpo justify-content-center align-items-center justify-content-md-start">
            <?php
            if (isset($_GET['peça'])) {
                $peca = $_GET['peça'];
                if ($peca == 'Toda') {
                    $sql_total = "SELECT COUNT(*) AS total FROM `modelo` WHERE `Usuário cadastrador` = '" . $_SESSION['Id usuário'] . "'";

                    $query = "SELECT * FROM `modelo` WHERE `Usuário cadastrador` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("iii", $_SESSION['Id usuário'], $offset, $resultados_por_pagina);
                } else {
                    $sql_total = "SELECT COUNT(*) AS total FROM `modelo` WHERE `Tipo` = '" . $peca . "' AND `Usuário cadastrador` = '" . $_SESSION['Id usuário'] . "'";

                    $query = "SELECT * FROM `modelo` WHERE `Tipo` = ? AND `Usuário cadastrador` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("siii", $peca, $_SESSION['Id usuário'], $offset, $resultados_por_pagina);
                }
            } else {
                $sql_total = "SELECT COUNT(*) AS total FROM `modelo` WHERE `Usuário cadastrador` = '" . $_SESSION['Id usuário'] . "'";

                $sql = "SELECT * FROM `modelo` WHERE `Usuário cadastrador` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("iii", $_SESSION['Id usuário'], $offset, $resultados_por_pagina);
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
                            echo '<a href="">';
                            echo '<img src="' . $caminho_imagem . '" alt="Imagem" class="modelos" ' . $row['Id modelo'] . '">';
                            echo '</a>';
                            echo '<p class="text-truncate text-white">' . $row['Título'] . '</p>';
                            echo '</div>';
                            echo '<script>';
                            echo 'alert("Este modelo foi reprovado por contrariar a política do site.");';
                            echo '</script>';
                        } else {
                            $caminho_imagem = $row['Capa']; // Usar a imagem da coluna "Capa"
                            echo '<div class="col-10 col-md-2 espaço">';
                            echo '<a href="Acesso.php?valor=' . $row['Id modelo'] . '">';
                            echo '<img src="' . $caminho_imagem . '" alt="Imagem" class="modelos" ' . $row['Id modelo'] . '">';
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
            <script>
                // Usar JavaScript para obter a largura e definir como o atributo de estilo 'height'
                document.addEventListener('DOMContentLoaded', function() {
                    var imagens = document.querySelectorAll('.modelos');
                    imagens.forEach(function(imagem) {
                        var largura = imagem.clientWidth;
                        imagem.style.height = largura + 'px';
                    });
                });
            </script>
        </div>

        <?php
        require_once('quantidadePag.php');
        require_once('paginaçao.php');
        require_once('rodape.php');
        $conn->close();
        ?>
</body>

</html>