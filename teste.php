<?php
include_once('conexao.php');
$sql = "SELECT `Arquivo` from modelo  WHERE 20";
$res = mysqli_query($conn, $sql);
if ($res && mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $endereco_imagem = $row['Arquivo'];

    echo '<img src="' . $endereco_imagem . '" alt="Imagem">';
} else {
    echo 'Nenhuma imagem encontrada.';
}
?>