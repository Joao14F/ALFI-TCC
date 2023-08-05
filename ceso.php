<?php
include_once('conexao.php');
$valor = $_GET['valor'];

// Use o valor de $valor para buscar o endereço da imagem no banco de dados
$sql = "SELECT `Capa` FROM `modelo` WHERE `Id modelo` = $valor";
$res = mysqli_query($conn, $sql);

if ($res && mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $endereco_imagem = $row['Capa'];
    echo '<img src="' . $endereco_imagem . '" alt="Imagem">';
} else {
    echo 'Nenhuma imagem encontrada.';
}
?>