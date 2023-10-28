<?php
if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
    include_once('conexao.php');

    // Crie o conteúdo do arquivo de texto com as medidas (o mesmo código que você já tem)
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

        // Defina os cabeçalhos para download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="Modelo_' . $valor . '.txt"');
        
        // Imprima o conteúdo do arquivo
        echo $medidasContent;
    } else {
        // Trate o caso em que não foram encontradas medidas
        echo "Não foi possível encontrar as medidas.";
    }
} else {
    // Trate o caso em que o parâmetro 'valor' não está definido
    echo "O parâmetro 'valor' não está definido.";
}
?>
