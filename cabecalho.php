<style>
<<<<<<< HEAD
header {
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.15);
    border-color: #8880FE;
}

button {
    margin-top: 20px;

}

.escolha{
    padding-top: 5px;
}

.logo img {
    min-width: 100px;
}

.CadastraModelo,
.login,
.cadastro {
    padding: 12px;
}

@media (min-width: 300px) and (max-width: 460px) {
.CadastraModelo,
.login,
.cadastro{
        font-size: 8px; 
        padding: 5px 5px; 
    }

    .logo img {
        width: 100px;
    }
}

@media (max-width: 800px) {
    .CadastraModelo,
.login,
.cadastro{
        font-size: 12px; 
        padding: 5px 10px; 
    }
}

@media (min-width: 801px) and (max-width: 1236px) {
    .logo img {
        margin-top: 30px;
        width: 150px;
    }
}


    </style>

<header>
<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">
=======
    header {
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.15);
        border-color: #8880FE;
    }
    button {
        padding-top: 10px;
    }
</style>

<header>
    <div class="row py-3 text-center align-items-center d-flex justify-content-center">
        <div class="col-8 col-sm-6 col-md-2 text-center align-items-center d-flex">
>>>>>>> fea756968f088a71955626cf84efd418517a88d9
            <?php
            // Verifica se o usuário é moderador
            if (isset($_SESSION['Id moderador'])) {
                echo '<a class="logo" href="adm.php">';
            } else {
                echo '<a class="logo" href="index.php">';
            }
            ?>
<<<<<<< HEAD
            <img style="padding-top: 20px; width: 45%;"src="imagens/ALFI.png" alt="logo!">
=======
            <img style="padding: 10px; "src="imagens/ALFI.png" alt="logo!">
>>>>>>> fea756968f088a71955626cf84efd418517a88d9
            </a>
        </div>
        <?php
        // Obtém a URL atual
        $pagina_completa = $_SERVER['REQUEST_URI'];
        $partes_url = parse_url($pagina_completa);
        $caminho = $partes_url['path'];
        $atual = basename($caminho);

<<<<<<< HEAD
$pagina_completa = $_SERVER['REQUEST_URI'];
$partes_url = parse_url($pagina_completa);
$caminho = $partes_url['path'];
$atual = basename($caminho);

switch ($atual) {
    case 'adm.php':
        echo '<div class="col-6 text-center col-xs-6 col-sm-4 col-md-5 col-lg-5">';
        echo '<a href="verificados.php"><button class="CadastraModelo">Modelos verificados</button></a>';
        echo '</div>';
        echo '<div class="col-6 text-center col-xs-6 col-sm-4 col-md-4 col-lg-4">';
        echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
        echo '</div>';
        break;
    
    case 'ADMacesso.php':
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="verificados.php"><button class="CadastraModelo">Modelos verificados</button></a>';
        echo '</div>';
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="adm.php"><button class="CadastraModelo">Início</button></a>';
        echo '</div>';
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
        echo '</div>';
        break;

    case 'verificados.php':
        echo '<div class="col-6 text-center col-xs-6 col-sm-4 col-md-5 col-lg-5">';
        echo '<a href="adm.php"><button class="CadastraModelo">Gerenciar Modelos</button></a>';
        echo '</div>';
        echo '<div class="col-6 text-center col-xs-6 col-sm-4 col-md-4 col-lg-4">';
        echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
        echo '</div>';
        break;

    case 'index.php':
        if (isset($_SESSION['Id usuário'])) {
            echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
            echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
            echo '</div>';
            echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
            echo '<a href="modelosCadastrados.php"><button class="CadastraModelo">Modelos Cadastrados</button></a>';
            echo '</div>';
            echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
            echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
            echo '</div>';
        } else {
            echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
            echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
            echo '</div>';
            echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
            echo '<a href="cadastro.php"><button class="CadastraModelo">Cadastro</button></a>';
            echo '</div>';
            echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
            echo '<a href="login.php"><button class="CadastraModelo">Login</button></a>';
            echo '</div>';
        }
        break;

    case 'modelosCadastrados.php':
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
        echo '</div>';
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="index.php"><button class="CadastraModelo">Início</button></a>';
        echo '</div>';
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
        echo '</div>';
        break;

    case 'Acesso.php':
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
        echo '</div>';
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="modelosCadastrados.php"><button class="CadastraModelo">Modelos Cadastrados</button></a>';
        echo '</div>';
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
        echo '</div>';
        break;
    
    default:
    if (isset($_SESSION['Id usuário'])) {
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
        echo '</div>';
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="modelosCadastrados.php"><button class="CadastraModelo">Modelos Cadastrados</button></a>';
        echo '</div>';
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="sair.php"><button class="CadastraModelo">Sair</button></a>';
        echo '</div>';
    } else {
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="Cadastrarmodelo.php"><button class="CadastraModelo">Cadastrar Modelos</button></a>';
        echo '</div>';
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="cadastro.php"><button class="CadastraModelo">Cadastro</button></a>';
        echo '</div>';
        echo '<div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">';
        echo '<a href="login.php"><button class="CadastraModelo">Login</button></a>';
        echo '</div>';
    }
        break;
}

        ?>
    </div>
</div>

</header>



<div class="row escolha">
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
=======
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
                echo '<a href="adm.php"><button class="CadastraModelo">Gerenciar Modelos</button></a>';
                echo '</div>';
                echo '<div class="col-12 col-sm-12 col-md-2 justify-content-center align-items-center d-flex">';
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
                    echo '<div class="col-12 col-sm-12 col-md-2 justify-content-center align-items-center d-flex">';
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
                    echo 'Selecione o tipo de peça desejado';
                }
>>>>>>> fea756968f088a71955626cf84efd418517a88d9

                // Verifica a página atual e exibe as opções de tipo de peça correspondentes
                if (basename($caminho) == 'adm.php') {
                    echo '<option value="adm.php" data-peca="Toda">Todas as peças</option>';
                    echo '<option value="adm.php" data-peca="Saia">Saias</option>';
                    echo '<option value="adm.php" data-peca="Calça">Calças</option>';
                    echo '<option value="adm.php" data-peca="Bermuda">Bermudas</option>';
                    echo '<option value="adm.php" data-peca="Sustentável">Sustentáveis</option>';
                } else {
                    echo '<option value="index.php" data-peca="Toda">Todas as peças</option>';
                    echo '<option value="index.php" data-peca="Saia">Saias</option>';
                    echo '<option value="index.php" data-peca="Calça">Calças</option>';
                    echo '<option value="index.php" data-peca="Bermuda">Bermudas</option>';
                    echo '<option value="index.php" data-peca="Sustentável">Sustentáveis</option>';
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