<header>
    <div class="row py-3 align-items-center d-none d-sm-none d-md-flex">
        <div class="col-md-2 text-center align-items-center justify-content-center">
            <?php
            // Verifica se o usuário é moderador
            if (isset($_SESSION['Id moderador'])) {
                echo '<a class="logo" href="adm.php">';
            } else {
                echo '<a class="logo" href="index.php">';
            }
            ?>
            <img style="padding: 10px;" src="imagens/ALFI.png" alt="logo!" class="logo">
            </a>
        </div>
        <?php
        // Obtém a URL atual
        $pagina_completa = $_SERVER['REQUEST_URI'];
        $partes_url = parse_url($pagina_completa);
        $caminho = $partes_url['path'];
        $atual = basename($caminho);

        // Switch case para definir o conteúdo do header de acordo com a página atual
        switch ($atual) {
            case 'adm.php':
                echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                echo '<a href="verificados.php"><button class="CadastraModelo">Modelos verificados</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
                echo '</div>';
                break;
            case 'ADMacesso.php':
                echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                echo '<a href="verificados.php"><button class="CadastraModelo">Modelos verificados</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-3 justify-content-center align-items-center d-flex">';
                echo '<a href="adm.php"><button class="CadastraModelo">Início</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-2 justify-content-center align-items-center d-flex">';
                echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
                echo '</div>';
                break;
            case 'verificados.php':
                echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                echo '<a href="adm.php"><button class="CadastraModelo">Verificar Modelos</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
                echo '</div>';
                break;
            case 'index.php':
                // Verifica se o usuário está logado
                if (isset($_SESSION['Id usuário'])) {
                    echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                    echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
                    echo '</div>';
                    echo '<div class="col-12 col-sm-12 col-md-3 justify-content-center align-items-center d-flex">';
                    echo '<a href="modelosCadastrados.php"><button class="CadastraModelo">Modelos Cadastrados</button></a>';
                    echo '</div>';
                    echo '<div class="col-12 col-sm-12 col-md-2 justify-content-center align-items-center d-flex">';
                    echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
                    echo '</div>';
                } else {
                    echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                    echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
                    echo '</div>';
                    echo '<div class="col-12 col-sm-12 col-md-3 justify-content-center align-items-center d-flex">';
                    echo '<a href="cadastro.php"><button class="CadastraModelo">Cadastro</button></a>';
                    echo '</div>';
                    echo '<div class="col-12 col-sm-12 col-md-2 justify-content-center align-items-center d-flex p-auto">';
                    echo '<a href="login.php"><button class="CadastraModelo">Login</button></a>';
                    echo '</div>';
                }
                break;
            case 'modelosCadastrados.php':
                echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-3 justify-content-center align-items-center d-flex">';
                echo '<a href="index.php"><button class="CadastraModelo">Início</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-2 justify-content-center align-items-center d-flex">';
                echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
                echo '</div>';
                break;
            case 'Acesso.php':
                echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-3 justify-content-center align-items-center d-flex">';
                echo '<a href="modelosCadastrados.php"><button class="CadastraModelo">Modelos Cadastrados</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-2 justify-content-center align-items-center d-flex">';
                echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
                echo '</div>';
                break;
            default:
                // Verifica se o usuário está logado
                if (isset($_SESSION['Id usuário'])) {
                    echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                    echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
                    echo '</div>';
                    echo '<div class="col-12 col-sm-12 col-md-3 justify-content-center align-items-center d-flex">';
                    echo '<a href="modelosCadastrados.php"><button class="CadastraModelo">Modelos Cadastrados</button></a>';
                    echo '</div>';
                    echo '<div class="col-12 col-sm-12 col-md-2 justify-content-center align-items-center d-flex">';
                    echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
                    echo '</div>';
                } else {
                    echo '<div class="col-12 col-sm-12 col-md-5 justify-content-center align-items-center d-flex">';
                    echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
                    echo '</div>';
                    echo '<div class="col-12 col-sm-12 col-md-3 justify-content-center align-items-center d-flex">';
                    echo '<a href="cadastro.php"><button class="CadastraModelo">Cadastro</button></a>';
                    echo '</div>';
                    echo '<div class="col-12 col-sm-12 col-md-2 justify-content-center align-items-center d-flex">';
                    echo '<a href="login.php"><button class="CadastraModelo">Login</button></a>';
                    echo '</div>';
                }
                break;
        }
        ?>
    </div>
    <div class="row py-3 align-items-center justify-content-center d-md-none">
        <div class="row text-center align-items-center justif-content-centerd-flex">
            <div class="col-12">
                <?php
                // Verifica se o usuário é moderador
                if (isset($_SESSION['Id moderador'])) {
                    echo '<a class="logo" href="adm.php">';
                } else {
                    echo '<a class="logo" href="index.php">';
                }
                ?>
                <img style="padding: 10px; " src="imagens/ALFI.png" alt="logo!" class="logo">
                </a>
            </div>
        </div>
        <?php
        // Obtém a URL atual
        $pagina_completa = $_SERVER['REQUEST_URI'];
        $partes_url = parse_url($pagina_completa);
        $caminho = $partes_url['path'];
        $atual = basename($caminho);

        // Switch case para definir o conteúdo do header de acordo com a página atual
        switch ($atual) {
            case 'adm.php':
                echo '<div class="row justify-content-end">';
                echo '<div class="col-6">';
                echo '<a href="sair.php"><button class="CadastraModelo w-100">Sair</button></a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="row">';
                echo '<a href="verificados.php"><button class="CadastraModelo w-100">Modelos verificados</button></a>';
                echo '</div>';
                echo '<div class="row">';
                echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo w-100">Cadastrar Modelos</button></a>';
                echo '</div>';
                break;
            case 'ADMacesso.php':
                echo '<div class="row justify-content-end">';
                echo '<div class="col-6">';
                echo '<a href="adm.php"><button class="CadastraModelo w-100">Início</button></a>';
                echo '</div>';
                echo '<div class="col-6">';
                echo '<a href="sair.php"><button class="CadastraModelo w-100">Sair</button></a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="row">';
                echo '<a href="verificados.php"><button class="CadastraModelo w-100">Verificar Modelos</button></a>';
                echo '</div>';
                break;
            case 'verificados.php':
                echo '<div class="row ">';
                echo '<div class="col-6">';
                echo '<a href="adm.php"><button class="CadastraModelo w-100">Início</button></a>';
                echo '</div>';
                echo '<div class="col-6">';
                echo '<a href="sair.php"><button class="CadastraModelo w-100">Sair</button></a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="row">';
                echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo w-100">Cadastrar Modelos</button></a>';
                echo '</div>';
                break;
            case 'index.php':
                // Verifica se o usuário está logado
                if (isset($_SESSION['Id usuário'])) {
                    echo '<div class="row justify-content-end">';
                    echo '<div class="col-6">';
                    echo '<a href="sair.php"><button class="CadastraModelo w-100">Sair</button></a>';
                    echo '</div>';
                    echo '<div class="col-12">';
                    echo '<a href="modelosCadastrados.php"><button class="CadastraModelo w-100">Modelos cadastrados</button></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<div class="col-12">';
                    echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo w-100">Cadastrar Modelos</button></a>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    echo '<div class="row">';
                    echo '<div class="col-6">';
                    echo '<a href="cadastro.php"><button class="CadastraModelo w-100">Cadastro</button></a>';
                    echo '</div>';
                    echo '<div class="col-6">';
                    echo '<a href="login.php"><button class="CadastraModelo w-100">Login</button></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<div class="col-12">';
                    echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo w-100">Cadastrar Modelos</button></a>';
                    echo '</div>';
                    echo '</div>';
                }
                break;
            case 'modelosCadastrados.php':
                echo '<div class="row justify-content-end">';
                echo '<div class="col-6">';
                echo '<a href="index.php"><button class="CadastraModelo w-100">Início</button></a>';
                echo '</div>';
                echo '<div class="col-6">';
                echo '<a href="sair.php"><button class="CadastraModelo w-100">Sair</button></a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="row">';
                echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo w-100">Cadastrar Modelos</button></a>';
                echo '</div>';
                break;
            case 'Acesso.php':
                echo '<div class="row">';
                echo '<div class="col-6">';
                echo '<a href="sair.php"><button class="CadastraModelo w-100">Início</button></a>';
                echo '</div>';
                echo '<div class="col-6">';
                echo '<a href="sair.php"><button class="CadastraModelo w-100">Sair</button></a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="row">';
                echo '<a href="modelosCadastrados.php"><button class="CadastraModelo w-100">Modelos Cadastrados</button></a>';
                echo '</div>';
                echo '<div class="row">';
                echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo w-100">Cadastrar Modelos</button></a>';
                echo '</div>';
                break;
            default:
                // Verifica se o usuário está logado
                if (isset($_SESSION['Id usuário'])) {
                    echo '<div class="row">';
                    echo '<div class="col-6">';
                    echo '<a href="sair.php"><button class="CadastraModelo w-100">Sair</button></a>';
                    echo '</div>';
                    echo '<div class="col-6">';
                    echo '<a href="login.php"><button class="CadastraModelo w-100">Modelos cadastrados</button></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<div class="col-6">';
                    echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo w-100">Cadastrar Modelos</button></a>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    echo '<div class="row">';
                    echo '<div class="col-6">';
                    echo '<a href="sair.php"><button class="CadastraModelo w-100">Sair</button></a>';
                    echo '</div>';
                    echo '<div class="col-6">';
                    echo '<a href="login.php"><button class="CadastraModelo w-100">Login</button></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<div class="col-12">';
                    echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo w-100">Cadastrar Modelos</button></a>';
                    echo '</div>';
                    echo '</div>';
                }
                break;
        }
        ?>

    </div>
</header>

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <select id="select" onchange="trocarPagina()" class="form-select mb-3">
            <option hidden>
                <?php
                // Verifica se o tipo de peça está definido na URL
                if (isset($_GET['peça'])) {
                    $peca = $_GET['peça'];
                    if ($peca == 'Sustentável') {
                        echo 'Sustentáveis';
                    } else {
                        echo $peca . "s";
                    }
                } else {
                    echo '<p class="text-responsive">Selecione o tipo de peça desejado</p>';
                }
                ?>
            </option>

            <?php
            if ($atual == 'ALFI-TCC') {
                $atual = 'index.php';
            }

            echo '<option value="' . $atual . '" data-peca="Todas as peça">Todas as peças</option>';
            echo '<option value="' . $atual . '" data-peca="Sustentável">Sustentável</option>';
            echo '<option value="' . $atual . '" data-peca="Bermuda">Bermuda</option>';
            echo '<option value="' . $atual . '" data-peca="Blusa">Blusa</option>';
            echo '<option value="' . $atual . '" data-peca="Calça">Calça</option>';
            echo '<option value="' . $atual . '" data-peca="Camisa">Camisa</option>';
            echo '<option value="' . $atual . '" data-peca="Casaco">Casaco</option>';
            echo '<option value="' . $atual . '" data-peca="Saia">Saia</option>';
            echo '<option value="' . $atual . '" data-peca="Top">Top</option>';
            echo '<option value="' . $atual . '" data-peca="Vestido">Vestido</option>';
            ?>
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