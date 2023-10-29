<?php include('sessao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagens/logonav.png">
   <title>Modelo</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha384-n6KAgNq2Yo46bTT4pG1zYK2l/EAq/ZGW0pmKwXkgH70VxObekHvJVsj02StilL3p" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .Titulo {
            color: #8880FE;
            text-align: center;
            font-size: 2.5rem;
            padding: 7px;
        }

        .dados {
            background-color: whitesmoke;
        }
    </style>
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
                    echo '<div class="col-6 justify-content-center">';
                    echo '<div id="carouselExampleIndicators" class="carousel slide"> <div class="carousel-indicators">';

                    echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
                    echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>';
                    echo '</div>';

                    echo '<div class="col-12 text-center">
                            <div class="carousel-inner">';

                    echo '<div class="carousel-item active">
                            <img src="' . $capa . '" class="w-100" alt="Imagem de Capa">
                          </div>';

                    foreach ($moldes as $Molde) {
                        echo '<div class="carousel-item">';
                        echo '<img src="' . $Molde .  '" alt="Imagem" class="w-100">';
                        echo '</div>';
                    }
                    echo '</div>';

                    echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>';
                    echo '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" ariahidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    echo '<div class="row justify-content-center m-2">';
                    echo '<div class="col-5">';
                    echo '<a href="download_modelo.php?valor=' . $valor . '" download="Modelo_' . $row['Título'] . '.zip" class="btn btn-secondary w-100">Download</a>';
                    echo '</div>';
                    echo '</div>';

                    echo '<div class="row justify-content-center m-2">';
                    echo '<div class="col-5">';
                    $sqlcad = "SELECT `Usuário cadastrador` FROM `modelo` WHERE `Id modelo` = ?";
                    $stmt = mysqli_prepare($conn, $sqlcad);
                    mysqli_stmt_bind_param($stmt, "i", $valor);
                    mysqli_stmt_execute($stmt);
                    $rescad = mysqli_stmt_get_result($stmt);

                    if ($rescad) {
                        $rowcad = mysqli_fetch_assoc($rescad);

                        if ($rowcad['Usuário cadastrador'] == $_SESSION['Id usuário']) {
                            echo '<form method="POST" action="deletaModelo.php">';
                            echo '<input type="hidden" name="valor" value="' . $valor . '">';
                            echo '<button type="submit" name="submit" class="btn btn-danger w-100" onclick="return confirm(\'Deseja deletar o modelo?\')">Deletar modelo</button>';
                            echo '</form>';
                        }
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    echo '<div class="row">';
                    echo '<p></p>';
                    echo '</div>';
                    echo '<div class="row dados">';
                    echo '<div class="col-10 col-sm-10 col-md-10 col-xs-12 col-lg-10">';

                    $sqlmed = "SELECT * FROM `modelo` WHERE `Id modelo` = ?";
                    $stmt = mysqli_prepare($conn, $sqlmed);
                    mysqli_stmt_bind_param($stmt, "i", $valor);
                    mysqli_stmt_execute($stmt);
                    $resmed = mysqli_stmt_get_result($stmt);

                    if ($resmed) {
                        $rowmed = mysqli_fetch_assoc($resmed);

                        $Comprimento = isset($rowmed['Comprimento']) ? $rowmed['Comprimento'] : null;
                        $Quadril = isset($rowmed['Quadril']) ? $rowmed['Quadril'] : null;
                        $Cintura = isset($rowmed['Cintura']) ? $rowmed['Cintura'] : null;
                        $Gancho = isset($rowmed['Gancho']) ? $rowmed['Gancho'] : null;
                        $Ombro = isset($rowmed['Ombro']) ? $rowmed['Ombro'] : null;
                        $Busto = isset($rowmed['Busto']) ? $rowmed['Busto'] : null;
                        $Comprimento_manga = isset($rowmed['Comprimento de manga']) ? $rowmed['Comprimento de manga'] : null;
                        $Comprimento_cintura = isset($rowmed['Comprimento de cintura']) ? $rowmed['Comprimento de cintura'] : null;
                        $Punho = isset($rowmed['Punho']) ? $rowmed['Punho'] : null;
                    }


                    if ($row['Tecido'] !== null) {
                        echo '<p class="dado">' . 'Tecido sugerido:'  . " " . $row['Tecido'] . '</p>';
                    }
                    echo '<p class="dado">Sustentável:' . " " . $row['Sustentável'] . '</p';
                    echo '<br>';

                    // Exibir os campos que não são nulos
                    if (!is_null($Comprimento)) {
                        echo '<p class="dado">Comprimento:' . " " . $Comprimento . ' cm' . '</p>';
                    }
                    if (!is_null($Quadril)) {
                        echo '<p class="dado">Quadril:' . " " . $Quadril . ' cm' . '</p>';
                    }
                    if (!is_null($Cintura)) {
                        echo '<p class="dado">Cintura:' . " " . $Cintura . ' cm' . '</p>';
                    }
                    if (!is_null($Gancho)) {
                        echo '<p class="dado">Gancho:' . " " . $Gancho . ' cm' . '</p>';
                    }
                    if (!is_null($Ombro)) {
                        echo '<p class="dado">Ombro:' . " " . $Ombro . ' cm' . '</p>';
                    }
                    if (!is_null($Busto)) {
                        echo '<p class="dado">Busto:' . " " . $Busto . ' cm' . '</p>';
                    }
                    if (!is_null($Comprimento_manga)) {
                        echo '<p class="dado">Comprimento de manga:' . " " . $Comprimento_manga . ' cm' . '</p>';
                    }
                    if (!is_null($Punho)) {
                        echo '<p class="dado">Punho:' . " " . $Punho . ' cm' . '</p>';
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
        <?php
        require_once('rodape.php');
        ?>

</body>

</html>