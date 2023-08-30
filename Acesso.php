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
                    echo '<div class="row">' . '<div class="imagens-inner">' . '<div class="imagens">';
                    echo '<img src="' . $endereco_capa . '" alt="Imagem" class="col-12 col-sm-12 col-md-12">';
                } else {
                    echo 'Falha ao buscar imagem.';
                }

                $Moldes = $row['Moldes'];
                $Moldes = explode(',', $Moldes);
                foreach ($Moldes as $Molde) {
                    echo '<img src="' . $Molde . '" alt="Imagem" class="col-12 col-sm-12 col-md-12">';
                }

                echo '</div>' . '</div>' . '</div>';

                if ($row['Tecido'] !== null) {
                    echo '<p style="color: azure;">' . 'Tecido sugerido:'  . " " . $row['Tecido'] . '</p>';
                }

                echo '<p style="color: azure;">Sustentável:' . " " . $row['Sustentável'] . '</p>';
                $Tipo = $row['Tipo'];
                if ($Tipo == 'Saia') {
                    $sqlMedidas = "SELECT `Comprimento`, `Quadril`, `Cintura` FROM `modelo` WHERE `Id modelo` = $valor";
                    $resMedidas = mysqli_query($conn, $sqlMedidas);

                    if ($resMedidas && mysqli_num_rows($resMedidas) > 0) {
                        $rowMedidas = mysqli_fetch_assoc($resMedidas);
                        $Comprimento = $rowMedidas['Comprimento'];
                        $Quadril = $rowMedidas['Quadril'];
                        $Cintura = $rowMedidas['Cintura'];
                        echo '<p style="color: azure;">Comprimento:' . " " . $Comprimento . '</p>';
                        echo '<p style="color: azure;">Quadril:' . " " . $Quadril . '</p>';
                        echo '<p style="color: azure;">Cintura:' . " " . $Cintura . '</p>';
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
                        echo '<p style="color: azure;">Comprimento:' . " " . $Comprimento . '</p>';
                        echo '<p style="color: azure;">Quadril:' . " " . $Quadril . '</p>';
                        echo '<p style="color: azure;">Cintura:' . " " . $Cintura . '</p>';
                        echo '<p style="color: azure;">Gancho:' . " " . $Gancho . '</p>';
                    }
                }
            } else {
                echo '<script>alert("Erro ao carregar o modelo"); window.location.href = "index.php";</script>';
            }
        }

        require_once('rodape.php');
        ?>
    </div>
    <script>
        let isDragging = false;
        let startPos;
        let scrollLeft;

        const imagensInner = document.querySelector('.imagens-inner');

        imagensInner.addEventListener('mousedown', (e) => {
            isDragging = true;
            startPos = e.clientX;
            scrollLeft = imagensInner.scrollLeft;

            // Evita seleção de texto durante o arraste
            e.preventDefault();
        });

        imagensInner.addEventListener('mousemove', (e) => {
            if (!isDragging) return;

            const dx = e.clientX - startPos;
            imagensInner.scrollLeft = scrollLeft - dx;
        });

        imagensInner.addEventListener('mouseup', () => {
            isDragging = false;
        });

        imagensInner.addEventListener('mouseleave', () => {
            isDragging = false;
        });
    </script>
</body>

</html>