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

            $zip->close();

            // Defina os cabeçalhos para o download
            header("Content-Type: application/zip");
            header("Content-Disposition: attachment; filename=$zipName");
            header("Content-Length: " . filesize($zipName));

            // Envie o arquivo ZIP para o navegador
            readfile($zipName);

            // Exclua o arquivo ZIP após o download
            unlink($zipName);
        }
    }
}
?>
