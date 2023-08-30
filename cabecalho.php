<header>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-3">
            <?php
            if (isset($_SESSION['Id moderador'])) {
                echo '<a class="logo" href="adm.php">';
            }
            else {
                echo '<a class="logo" href="index.php">';
            }      
            ?>
                <img src="imagens/logo.png" alt="logo!">
            </a>
        </div>
        <div class="botões col-12 col-sm-12 col-md-4">
            <?php

            $pagina_completa = $_SERVER['REQUEST_URI'];
            $partes_url = parse_url($pagina_completa);
            $caminho = $partes_url['path'];

            if (isset($_SESSION['Id moderador'])) {
                if (basename($caminho) == 'adm.php' || 'ADMacesso.php') {
                    echo '<a href=""><button class="CadastraModelo">Modelos verificados</button></a>';
                }
            } else {
                echo ' <a href="CadastrarModelo.php"><button class="CadastraModelo">Cadastrar Modelo</button></a>';
            }


            echo '</div>';

            echo '<div class="botões col-12 col-sm-12 col-md-4">';



            if (isset($_SESSION['Id usuário'])) {
                if (basename($caminho) == 'modelosCadastrados.php') {
                    echo '<a href="index.php"><button class="login">Início</button></a>';
                    echo '<a href="sair.php"><button class="cadastro">Sair</button></a>';
                } else {
                    echo '<a href="modelosCadastrados.php"><button class="login">Modelos Cadastrados</button></a>';
                    echo '<a href="sair.php"><button class="cadastro">Sair</button></a>';
                }
            } elseif (isset($_SESSION['Id moderador'])) {
                if (basename($caminho) == 'ADMacesso.php') {
                    echo '<a href="adm.php"><button class="login">Início</button></a>';
                    echo '<a href="sair.php"><button class="cadastro">Sair</button></a>';
                } else {
                    echo '<a href="sair.php"><button class="cadastro">Sair</button></a>';
                }
            } else {
                echo '<a href="login.php"><button class="login">Login</button></a>';
                echo '<a href="cadastro.php"><button class="cadastro">Cadastro</button></a>';
            }

            ?>


        </div>
        <div class="col-md-1"></div>
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