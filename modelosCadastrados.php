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
                if ($peca == 'Toda') {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `Usuário cadastrador` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("iii", $_SESSION['Id usuário'], $offset, $resultados_por_pagina);
                } else {
                    $query = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `Tipo` = ? AND `Usuário cadastrador` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("siii", $peca, $_SESSION['Id usuário'], $offset, $resultados_por_pagina);
                }
                $stmt->execute();
                $res = $stmt->get_result();
            } else {
                $sql = "SELECT `Capa`, `Id modelo` FROM `modelo` WHERE `Usuário cadastrador` = ? ORDER BY `Id modelo` DESC LIMIT ?, ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("iii", $_SESSION['Id usuário'], $offset, $resultados_por_pagina);
                $stmt->execute();
                $res = $stmt->get_result();
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
        <?php
        require_once('rodape.php')
        ?>
    </div>
</body>

</html>