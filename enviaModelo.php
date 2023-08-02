<?php
include_once('conexao.php');

$Título = $_POST['Título'];
$Sustentável = $_POST['Sustentável'];
$Tipo = $_POST['Tipo'];

// Tratamento do arquivo de capa
if (isset($_FILES['Capa'])) {
    $ponto = strtolower(pathinfo($_FILES['Capa']['name'], PATHINFO_EXTENSION));
    $pasta = 'Arquivos/Capas/';
    $nomeCapa = uniqid() . '.' . $ponto;
    $temporarioCapa = $_FILES['Capa']['tmp_name'];

    if ($ponto != 'jpg' && $ponto != 'png' && $ponto != 'pdf') {
        echo 'Apenas arquivos jpg, png e pdf são aceitos para a capa';
        exit();
    } else {
        if (move_uploaded_file($temporarioCapa, $pasta . $nomeCapa)) {
            echo 'Capa enviada com sucesso';
            $Capa = $pasta . $nomeCapa;
        } else {
            echo 'Erro ao enviar a capa';
            exit();
        }
    }
}

// Tratamento dos arquivos de moldes
if (isset($_FILES['Moldes'])) {
    $pastaMoldes = 'Arquivos/Moldes/'; // Substitua pelo diretório onde deseja salvar os moldes
    $nomesMoldes = array();
    foreach ($_FILES['Moldes']['tmp_name'] as $index => $temporarioMolde) {
        $pontoMolde = strtolower(pathinfo($_FILES['Moldes']['name'][$index], PATHINFO_EXTENSION));
        $nomeMolde = uniqid() . '.' . $pontoMolde;

        if ($pontoMolde != 'jpg' && $pontoMolde != 'png' && $pontoMolde != 'pdf') {
            echo '<script>alert("Apenas arquivos jpg, png e pdf são aceitos para os moldes");</script>';
            exit();
        } else {
            if (move_uploaded_file($temporarioMolde, $pastaMoldes . $nomeMolde)) {
                $nomesMoldes[] = $pastaMoldes . $nomeMolde;
            } else {
                echo '<script>alert("Erro ao enviar o molde");</script>';
                exit();
            }
        }
    }
    // Os nomes dos moldes serão armazenados em um único campo na tabela, separados por vírgula
    $Moldes = implode(',', $nomesMoldes);
}

if ($Tipo == 'Saia') {
    $Comprimento = $_POST['Comprimento'];
    $Quadril = $_POST['Quadril'];
    $Cintura = $_POST['Cintura'];

    $sql = "INSERT INTO modelo (`Título`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Capa`, `Moldes`) 
    VALUES ('$Título', '$Sustentável', '$Tipo', '$Comprimento', '$Quadril', '$Cintura', '$Capa', '$Moldes')";

} elseif ($Tipo == 'Calça') {
    $Comprimento = $_POST['Comprimento'];
    $Quadril = $_POST['Quadril'];
    $Cintura = $_POST['Cintura'];
    $Gancho = $_POST['Gancho'];

     $sql = "INSERT INTO modelo (`Título`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Capa`, `Moldes`) 
    VALUES ('$Título', '$Sustentável', '$Tipo', '$Comprimento', '$Quadril', '$Cintura', '$Gancho', '$Capa', '$Moldes')";

} elseif ($Tipo == 'Bermuda') {
    $Comprimento = $_POST['Comprimento'];
    $Quadril = $_POST['Quadril'];
    $Cintura = $_POST['Cintura'];
    $Gancho = $_POST['Gancho'];

     $sql = "INSERT INTO modelo (`Título`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Capa`, `Moldes`) 
    VALUES ('$Título', '$Sustentável', '$Tipo', '$Comprimento', '$Quadril', '$Cintura', '$Gancho', '$Capa', '$Moldes')";
}

if (mysqli_query($conn, $sql)) {
    echo '</br>';
    echo '<script>alert("Molde enviado com sucesso");</script>';
} else {
    echo '</br>';
    echo '<script>alert("Erro");</script>';
}
