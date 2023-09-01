<?php include('sessao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagens/navlogo.png">
    <title>Index</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <div class="container-fluid">
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
                echo '<div class="row">' . '<h1 class="col-12 col-sm-12 col-md-12 Titulo">' . $Titulo . '</h1>' . '</div>';

                $endereco_capa = $row['Capa'];
                if ($endereco_capa) {
                    echo '<div class="row linhagimg">' . '<img id="big-image" src="' . $endereco_capa .  '"alt="Imagem" class=" imagem col-12 col-sm-12 col-md-12">' .  '</div>';
                    echo '<div class="row linhagimg">' . '<img src="' . $endereco_capa .  '"alt="Imagem" class=" imagensp col-12 col-sm-12 col-md-12" onclick="changeImage(' .  "'" . $endereco_capa . "'" . ')">';
                } else {
                    echo 'Falha ao buscar imagem.';
                }
                //termina essa funçao
                $Moldes = $row['Moldes'];
                $Moldes = explode(',', $Moldes);
                foreach ($Moldes as $Molde) {
                    echo '<img src="' . $Molde .  '"alt="Imagem" class="  imagensp col-12 col-sm-12 col-md-12" onclick="changeImage(' . "'" . $Molde . "'" . ')">';
                }

                echo '</div>';
                echo '<div class="row dados">';
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
        <?php
        require_once('rodape.php')
        ?>
        <script>
            function changeImage(newImageSrc) {
                var bigImage = document.getElementById('big-image');
                bigImage.src = newImageSrc;
            }
        </script>
    </div>
</body>

</html>