<header>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-2">
            <?php
            if (isset($_SESSION['Id moderador'])) {
                echo '<a class="logo" href="adm.php">';
            } else {
                echo '<a class="logo" href="index.php">';
            }
            ?>
            <img src="imagens/logo.png" alt="logo!">
            </a>
        </div>

        <?php

        $pagina_completa = $_SERVER['REQUEST_URI'];
        $partes_url = parse_url($pagina_completa);
        $caminho = $partes_url['path'];

        if (basename($caminho) == 'adm.php') {
            echo '<div class="col-12 col-sm-12 col-md-5">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Modelos verificados</button></a>';
            echo '</div>';
            echo '<div class="col-12 col-sm-12 col-md-5">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Sair</button></a>';
            echo '</div>';
        }
        if (basename($caminho) == 'ADMacesso.php') {
            echo '<div class="col-12 col-sm-12 col-md-5">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Modelos verificados</button></a>';
            echo '</div>';
            echo '<div class="col-12 col-sm-12 col-md-3">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Início</button></a>';
            echo '</div>';
            echo '<div class="col-12 col-sm-12 col-md-2">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Sair</button></a>';
            echo '</div>';
        }
        if (basename($caminho) == 'verificados.php') {
            echo '<div class="col-12 col-sm-12 col-md-5">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Gerenciar Modelos</button></a>';
            echo '</div>';
            echo '<div class="col-12 col-sm-12 col-md-3">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Início</button></a>';
            echo '</div>';
            echo '<div class="col-12 col-sm-12 col-md-2">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Sair</button></a>';
            echo '</div>';
        }
        if (basename($caminho) == 'index.php') {
            if (isset($_SESSION['Id usuário'])) {
                echo '<div class="col-12 col-sm-12 col-md-5">';
                echo '<a href="verificados.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-3">';
                echo '<a href="verificados.php"><button class="CadastraModelo">Modelos Cadastrados</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-2">';
                echo '<a href="verificados.php"><button class="CadastraModelo">Sair</button></a>';
                echo '</div>';
            } else {
                echo '<div class="col-12 col-sm-12 col-md-5">';
                echo '<a href="verificados.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-3">';
                echo '<a href="verificados.php"><button class="CadastraModelo">Cadastro</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-2">';
                echo '<a href="verificados.php"><button class="CadastraModelo">Login</button></a>';
                echo '</div>';
            }
        }
        if (basename($caminho) == 'modelosCadastrados.php') {
            echo '<div class="col-12 col-sm-12 col-md-5">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
            echo '</div>';
            echo '<div class="col-12 col-sm-12 col-md-3">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Início</button></a>';
            echo '</div>';
            echo '<div class="col-12 col-sm-12 col-md-2">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Sair</button></a>';
            echo '</div>';
        }
        if (basename($caminho) == 'Acesso.php') {
            echo '<div class="col-12 col-sm-12 col-md-5">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
            echo '</div>';
            echo '<div class="col-12 col-sm-12 col-md-3">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Modelos Cadastrados</button></a>';
            echo '</div>';
            echo '<div class="col-12 col-sm-12 col-md-2">';
            echo '<a href="verificados.php"><button class="CadastraModelo">Sair</button></a>';
            echo '</div>';
        }
        ?>
    </div>
</header>
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <select id="select" onchange="trocarPagina()" class="form-select borda">
            <option hidden> <?php
                            if (isset($_GET['peça'])) {
                                $peca = $_GET['peça'];
                                if ($peca == 'Sustentável') {
                                    echo 'Sustentáveis';
                                } else {
                                    echo $peca . "s";
                                }
                            } else {
                                echo 'Selecione o tipo de peça desejado';
                            }

                            if (basename($caminho) == 'adm.php') {
                                echo    '<option value="adm.php" data-peca="Toda">Todas as peças</option>';
                                echo    '<option value="adm.php" data-peca="Saia">Saias</option>';
                                echo    '<option value="adm.php" data-peca="Calça">Calças</option>';
                                echo    '<option value="adm.php" data-peca="Bermuda">Bermudas</option>';
                                echo    '<option value="adm.php" data-peca="Sustentável">Sustentáveis</option>';
                            } else {
                                echo    '<option value="index.php" data-peca="Toda">Todas as peças</option>';
                                echo    '<option value="index.php" data-peca="Saia">Saias</option>';
                                echo    '<option value="index.php" data-peca="Calça">Calças</option>';
                                echo    '<option value="index.php" data-peca="Bermuda">Bermudas</option>';
                                echo    '<option value="index.php" data-peca="Sustentável">Sustentáveis</option>';
                            }
                            ?>

            </option>
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