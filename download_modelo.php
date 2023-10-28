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
        $zip = new ZipArchive();
        $zipName = "Modelo_$titulo.zip";

        if ($zip->open($zipName, ZipArchive::CREATE) === TRUE) {
            // Adicione a capa ao arquivo ZIP
            $zip->addFile($capa, "Capa.png");

            // Adicione os moldes ao arquivo ZIP
            foreach ($moldes as $i => $mold) {
                $zip->addFile($mold, "Molde_$i.png");
            }

            // Crie o conteúdo do arquivo de texto com as medidas
            $sqlMedidas = "SELECT `Título`, `Tecido`, `Sustentável`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Ombro`, `Busto`, `Comprimento de manga`, `Comprimento de cintura`, `Punho` FROM `modelo` WHERE `Id modelo` = $valor";
            $resMedidas = mysqli_query($conn, $sqlMedidas);

            if ($resMedidas) {
                $rowMedidas = mysqli_fetch_assoc($resMedidas);

                $medidasContent = ""; // Inicialize o conteúdo sem a linha "Medidas:"

                foreach ($rowMedidas as $coluna => $valor) {
                    if (!is_null($valor)) {
                        $medidasContent .= "$coluna: $valor\n";
                    }
                }

                // Crie um arquivo de texto temporário
                $tempTxtFile = tempnam(sys_get_temp_dir(), 'modelo_txt');
                file_put_contents($tempTxtFile, $medidasContent);

                // Adicione o arquivo de texto ao arquivo ZIP
                $zip->addFile($tempTxtFile, "Medidas.txt");

                // Feche o arquivo ZIP
                $zip->close();

                // Defina os cabeçalhos para download do arquivo ZIP
                header("Content-Type: application/zip");
                header("Content-Disposition: attachment; filename=$zipName");
                header("Content-Length: " . filesize($zipName));

                // Envie o arquivo ZIP para o navegador
                readfile($zipName);

                // Exclua o arquivo ZIP e o arquivo de texto temporário após o download
                unlink($zipName);
                unlink($tempTxtFile);
            } else {
                // Trate o caso em que não foram encontradas medidas
                echo "Não foi possível encontrar as medidas.";
            }
        }
    } else {
        // Trate o caso em que os dados do modelo não foram encontrados
        echo "Não foi possível encontrar os dados do modelo.";
    }
} else {
    // Trate o caso em que o parâmetro 'valor' não está definido
    echo "O parâmetro 'valor' não está definido.";
}
?>
