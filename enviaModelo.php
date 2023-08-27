<?php
include_once('conexao.php');
include_once('sessao.php');

$Título = $_POST['Título'];
$Tecido = $_POST['Tecido'];
$Sustentável = $_POST['Sustentável'];
$Tipo = $_POST['Tipo'];

// Tratamento do arquivo de capa
if (isset($_FILES['Capa'])) {
    $ponto = strtolower(pathinfo($_FILES['Capa']['name'], PATHINFO_EXTENSION));
    $pasta = 'Arquivos/Capas/';
    $nomeCapa = uniqid() . '.' . $ponto;
    $temporarioCapa = $_FILES['Capa']['tmp_name'];

    if ($ponto != 'jpg' && $ponto != 'png' && $ponto != 'pdf') {
        echo '<script>alert("Apenas arquivos jpg, png e pdf são aceitos para os moldes"); window.location.href = "CadastrarModelo.php";</script>';
        exit();
    } else {
        if (move_uploaded_file($temporarioCapa, $pasta . $nomeCapa)) {
            $Capa = $pasta . $nomeCapa;
        } else {
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
            echo '<script>alert("Apenas arquivos jpg, png e pdf são aceitos para os moldes"); window.location.href = "CadastrarModelo.php";</script>';
            exit();
        } else {
            if (move_uploaded_file($temporarioMolde, $pastaMoldes . $nomeMolde)) {
                $nomesMoldes[] = $pastaMoldes . $nomeMolde;
            } else {
                echo '<script>alert("Erro ao enviar o molde"); window.location.href = "CadastrarModelo.php";</script>';
                exit();
            }
        }
    }
    // Os nomes dos moldes serão armazenados em um único campo na tabela, separados por vírgula
    $Moldes = implode(',', $nomesMoldes);
}

$Comprimento = isset($_POST['Comprimento']) ? $_POST['Comprimento'] : null;
$Quadril = isset($_POST['Quadril']) ? $_POST['Quadril'] : null;
$Cintura = isset($_POST['Cintura']) ? $_POST['Cintura'] : null;
$Gancho = isset($_POST['Gancho']) ? $_POST['Gancho'] : null;

if (isset($_SESSION['Id usuário'])) {
    $sql = "INSERT INTO modelo (`Título`, `Tecido`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Capa`, `Moldes`, `Usuário cadastrador`) 
    VALUES ('$Título', '$Tecido', '$Sustentável', '$Tipo', '$Comprimento', '$Quadril', '$Cintura', '$Gancho', '$Capa', '$Moldes', '" . $_SESSION['Id usuário'] . "')";
}

if (isset($_SESSION['Id moderador'])) {
    $sql = "INSERT INTO modelo (`Título`, `Tecido`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Capa`, `Moldes`, `Usuário cadastrador`) 
    VALUES ('$Título', '$Tecido', '$Sustentável', '$Tipo', '$Comprimento', '$Quadril', '$Cintura', '$Gancho', '$Capa', '$Moldes', '" . $_SESSION['Id moderador'] . "')";
}



if (mysqli_query($conn, $sql)) {
    echo '</br>';
      echo '<script>alert("Molde enviado com sucesso"); window.location.href = "index.php";</script>';
} else {
    echo '</br>';
    echo '<script>alert("Erro"); window.location.href = "CadastrarModelo.php";</script>';
}