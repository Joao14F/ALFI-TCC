<?php
            include_once('conexao.php');
            $peca = 'Saia';
            $stmt = $conn->prepare("SELECT `Capa`,`Id modelo` FROM `modelo` where `Tipo` = ? ");
                $stmt->bind_param("s", $peca);
                $stmt->execute();
                $res = $stmt->get_result();

                if ($res && mysqli_num_rows($res) > 0) {
                    // Exibe as imagens dentro do laço `while`
                    while ($row = mysqli_fetch_assoc($res)) {
                        if (isset($row['Capa'])) { // Verifica se a chave 'Capa' está definida
                            $caminho_imagem = $row['Capa'];
                            echo '<a href="Acesso.php?valor=' . $row['Id modelo'] . '">';
                            echo '<img src="' . $caminho_imagem . '" alt="Imagem" class="modelos col-8 col-sm-8 col-md-8">';
                            echo '</a>';
                            echo $peca;
                        }
                    }
                }
