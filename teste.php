        <?php
        include_once('conexao.php');

        // Define a quantidade de resultados a serem exibidos por página
        $resultados_por_pagina = 8;

        // Obtém o número da página atual a partir do parâmetro "page" na URL
        if (isset($_GET['page']) && is_numeric($_GET['page'])) {
            $pagina_atual = $_GET['page'];
        } else {
            $pagina_atual = 1;
        }

        // Calcula o deslocamento (offset) com base na página atual
        $offset = ($pagina_atual - 1) * $resultados_por_pagina;

        // Consulta o banco de dados para obter os caminhos das imagens limitados pelos resultados da página atual
        $sql = "SELECT `Capa` FROM `modelo` LIMIT $offset, $resultados_por_pagina";
        $res = mysqli_query($conn, $sql);

        if ($res && mysqli_num_rows($res) > 0) {
            // Exibe as imagens dentro do laço `while`
            while ($row = mysqli_fetch_assoc($res)) {
                if (isset($row['Capa'])) { // Verifica se a chave 'Capa' está definida
                    $nome = $row['Capa']; // Atribui o valor do ID à variável $id
                    $caminho_imagem = $row['Capa'];
                    echo '<a href="Acesso.php?valor=' . $nome . '">';
                    echo '<img src="' . $caminho_imagem . '" alt="Imagem" class="modelos">';
                    echo '</a>';
                }
            }

            // Cria os links de paginação
            $sql_total = "SELECT COUNT(*) AS total FROM `modelo`";
            $res_total = mysqli_query($conn, $sql_total);
            $row_total = mysqli_fetch_assoc($res_total);
            $total_resultados = $row_total['total'];
            $total_paginas = ceil($total_resultados / $resultados_por_pagina);

            echo '<div class="pagination">';

            // Link para a página anterior, se não estiver na primeira página
            if ($pagina_atual > 1) {
                echo '<a href="?page=' . ($pagina_atual - 1) . '">Anterior</a>' . ' ';
            }

            // Links para as páginas individuais
            for ($i = 1; $i <= $total_paginas; $i++) {
                echo '<a href="?page=' . $i . '">' . $i . '</a>' . ' ';
            }

            // Link para a próxima página, se não estiver na última página
            if ($pagina_atual < $total_paginas) {
                echo '<a href="?page=' . ($pagina_atual + 1) . '">Próxima</a>' . ' ';
            }

            echo '</div>';
        } else {
            echo 'Nenhuma imagem encontrada.';
        }

        // Fecha a conexão com o banco de dados
        $conn->close();