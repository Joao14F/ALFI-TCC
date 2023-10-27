<?php
if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
    include_once('conexao.php');

    // Obtenha os dados do modelo, incluindo a capa e os moldes
    $sql = "SELECT `Título`, `Capa`, `Moldes` FROM `modelo` WHERE `Id modelo` = $valor";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $titulo = $row['Título'];
        $capa = $row['Capa'];
        $moldes = explode(',', $row['Moldes']);

        // Crie um arquivo ZIP
        $zipName = "Modelo_$titulo.zip";

        $zip = new ZipArchive();
        if ($zip->open($zipName, ZipArchive::CREATE) === TRUE) {
            // Adicione a capa ao arquivo ZIP
            $zip->addFile($capa, "Capa.png");

            // Adicione os moldes ao arquivo ZIP
            foreach ($moldes as $i => $mold) {
                $zip->addFile($mold, "Molde_$i.png");
            }

            // Crie o conteúdo do arquivo de texto com as medidas
            $medidasContent = "Medidas:\n";
            $sqlMedidas = "SELECT `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Ombro`, `Busto`, `Comprimento_de_manga`, `Comprimento_de_cintura`, `Punho` FROM `modelo` WHERE `Id modelo` = $valor";
            $resMedidas = mysqli_query($conn, $sqlMedidas);

            if ($resMedidas && mysqli_num_rows($resMedidas) > 0) {
                $medida = mysqli_fetch_assoc($resMedidas);

                // Crie o conteúdo do arquivo de texto
                foreach ($medida as $coluna => $valor) {
                    if ($valor !== null) {
                        $medidasContent .= "$coluna: $valor\n";
                    }
                }
            }

            // Crie um arquivo temporário para o arquivo de texto
            $tempMedidasFile = tempnam(sys_get_temp_dir(), 'medidas');
            file_put_contents($tempMedidasFile, $medidasContent);

            // Adicione o arquivo de texto temporário ao arquivo ZIP
            $zip->addFile($tempMedidasFile, "Medidas.txt");

            // Feche e salve o arquivo ZIP
            $zip->close();

            // Defina os cabeçalhos para o download
            header("Content-Type: application/zip");
            header("Content-Disposition: attachment; filename=$zipName");
            header("Content-Length: " . filesize($zipName));

            // Envie o arquivo ZIP para o navegador
            readfile($zipName);

            // Exclua o arquivo ZIP e o arquivo de texto temporário após o download
            unlink($zipName);
            unlink($tempMedidasFile);
        }
    }
}
?>
