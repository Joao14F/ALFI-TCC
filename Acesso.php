<style>
    img {
        width: 550px;
    }

    .Titulo {
        color: #8880FE;
        text-align: center;
        font-size: 2.5rem;
        padding: 7px;
    }

    .dados {
        margin-left: 5px;
        margin-right: 5px;
        background-color: whitesmoke;
    }

    .carousel-item img {
        width: 50%;
        height: auto;
    }

    @media (max-width: 720px) {
        .carousel-item img {
            width: 100%;
            /* Ou qualquer outro estilo desejado para telas menores */
        }
    }
</style>


<?php include('sessao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagens/navlogo.png">
    <title>Modelo</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha384-n6KAgNq2Yo46bTT4pG1zYK2l/EAq/ZGW0pmKwXkgH70VxObekHvJVsj02StilL3p" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="container-fluid">
        <div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12">
            <?php
            include_once('logado.php');
            require_once('cabecalho.php');
            include_once('conexao.php');
            if (isset($_GET['valor'])) {
                $valor = $_GET['valor'];

                $sql = "SELECT `Título`, `Tecido`, `Sustentável`, `Capa`, `Moldes`, `Tipo` FROM `modelo` WHERE `Id modelo` = $valor";
                $res = mysqli_query($conn, $sql);

                if ($res && mysqli_num_rows($res) > 0) {
                    $row = mysqli_fetch_assoc($res);
                    $Titulo = $row['Título'];
                    $capa = $row['Capa'];
                    $moldes = explode(',', $row['Moldes']);

                    echo '<div class="row">' . '<h1 class="col-12 col-sm-12 col-md-12 Titulo">' . $Titulo . '</h1>' . '</div>';
                    echo '<div class="row justify-content-center">';
                    echo '<div class=" col-6 justfy-content-center">';
                    echo '<div id="carouselExampleIndicators" class="carousel slide"> <div class="carousel-indicators">';

                    echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
                    echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>';
                    echo '</div>

                <div class="col-12 text-center">
                        <div class="carousel-inner">';

                    echo '<div class="carousel-item active">
                        <img src="' . $capa . '" class="img-fluid" alt="Imagem de Capa">
                      </div>';

                    foreach ($moldes as $Molde) {
                        echo '<div class="carousel-item">';
                        echo '<img src="' . $Molde .  '"alt="Imagem" class="w-100">';
                        echo '</div>';
                    }
                    '</div>'

            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    </div>
<div class="row">
    <div class="col-5">
    <i id="icone" class="bi bi-bookmark-plus" style="font-size: 2rem; cursor: pointer;"></i>
</div>
</div>
<script>
    $(document).ready(function() {
        $("#icone").click(function() {
            if ($(this).hasClass("bi-bookmark-plus")) {
                $(this).removeClass("bi-bookmark-plus");
                $(this).addClass("bi-bookmark-check");
                alert("Modelo adicionado aos modelos salvos");
            } else {
                $(this).removeClass("bi-bookmark-check");
                $(this).addClass("bi-bookmark-plus");
                alert("Modelo removido dos modelos salvos");
            }
        });
    });
</script>
    <div class="row">
        <p></p>
    </div>


    <div class="container">
        <div class="row dados">
            <div class="col-10 col-sm-10 col-md-10 col-xs-12 col-lg-10">
        <?php
                    if ($row['Tecido'] !== null) {
                        echo '<p class="dado">' . 'Tecido sugerido:'  . " " . $row['Tecido'] . '</p>';
                    }

                    echo '<p class="dado">Sustentável:' . " " . $row['Sustentável'] . '</p>';
                    $Tipo = $row['Tipo'];
                    if ($Tipo == 'Saia') {
                        $sqlMedidas = "SELECT `Comprimento`, `Quadril`, `Cintura` FROM `modelo` WHERE `Id modelo` = $valor";
                        $resMedidas = mysqli_query($conn, $sqlMedidas);

                        if ($resMedidas && mysqli_num_rows($resMedidas) > 0) {
                            $rowMedidas = mysqli_fetch_assoc($resMedidas);
                            $Comprimento = $rowMedidas['Comprimento'];
                            $Quadril = $rowMedidas['Quadril'];
                            $Cintura = $rowMedidas['Cintura'];
                            echo '<p class="dado">Comprimento:' . " " . $Comprimento . ' cm' . '</p>';
                            echo '<p class="dado">Quadril:' . " " . $Quadril . ' cm' . '</p>';
                            echo '<p class="dado">Cintura:' . " " . $Cintura . ' cm' . '</p>';
                        }
                    } elseif ($Tipo == 'Bermuda' || $Tipo == 'Calça') {
                        $sqlMedidas = "SELECT `Comprimento`, `Quadril`, `Cintura`, `Gancho` FROM `modelo` WHERE `Id modelo` = $valor";
                        $resMedidas = mysqli_query($conn, $sqlMedidas);

                        if ($resMedidas && mysqli_num_rows($resMedidas) > 0) {
                            $rowMedidas = mysqli_fetch_assoc($resMedidas);
                            $Comprimento = $rowMedidas['Comprimento'];
                            $Quadril = $rowMedidas['Quadril'];
                            $Cintura = $rowMedidas['Cintura'];
                            $Gancho = $rowMedidas['Gancho'];
                            echo '<p class="dado">Comprimento:' . " " . $Comprimento . ' cm' . '</p>';
                            echo '<p class="dado">Quadril:' . " " . $Quadril . ' cm' . '</p>';
                            echo '<p class="dado">Cintura:' . " " . $Cintura . ' cm' . '</p>';
                            echo '<p class="dado">Gancho:' . " " . $Gancho . ' cm' . '</p>';
                        }
                    }
                } else {
                    echo '<script>alert("Erro ao carregar o modelo"); window.location.href = "index.php";</script>';
                }
            }

        ?>

            </div>
        </div>

        <div class="row">
            <p></p>
        </div>

        <div class="row">
            <?php
            require_once('rodape.php')
            ?>

        </div>
</body>

</html>