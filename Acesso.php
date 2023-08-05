<?php
include_once('conexao.php');
$valor = $_GET['id'];

// Titulo
$sqlt = "SELECT `Título` FROM `modelo` WHERE `Id modelo` = $valor";
$rest = mysqli_query($conn, $sqlt);

if ($rest && mysqli_num_rows($rest) > 0) {
    $rowt = mysqli_fetch_assoc($rest);
    $Titulo = $rowt['Título'];
    echo $Titulo;
}

// Capa
$sqlc = "SELECT `Capa` FROM `modelo` WHERE `Id modelo` = $valor";
$resc = mysqli_query($conn, $sqlc);

if ($resc && mysqli_num_rows($resc) > 0) {
    $rowc = mysqli_fetch_assoc($resc);
    $endereco_imagem = $rowc['Capa'];
    echo '<img src="' . $endereco_imagem . '" alt="Imagem">';
} else {
    echo 'Nenhuma imagem encontrada.';
}

$sqld = "SELECT `Tipo` FROM `modelo` WHERE `Id modelo` = $valor";
$resd = mysqli_query($conn, $sqld);

if ($resd && mysqli_num_rows($resd) > 0) {
    $rowd = mysqli_fetch_assoc($resd);
    $Tipo = $rowd['Tipo'];
    if ($Tipo == 'Saia') {
        $sql = "SELECT `Comprimento`, `Quadril`, `Cintura` FROM `modelo` WHERE `Id modelo` = $valor";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $Comprimento = $row['Comprimento'];
        $Quadril = $row['Quadril'];
        $Cintura = $row['Cintura'];
        echo $Comprimento . $Quadril . $Cintura;
    }
    if ($Tipo == 'Bermuda || Calça') {
        $sql = "SELECT `Comprimento`, `Quadril`, `Cintura`, `Gancho` FROM `modelo` WHERE `Id modelo` = $valor";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $Comprimento = $row['Comprimento'];
        $Quadril = $row['Quadril'];
        $Cintura = $row['Cintura'];
        $Gancho = $row['Gancho'];
        echo $Comprimento . $Quadril . $Cintura . $Gancho;
    }
}
?>