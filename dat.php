<?php

include_once('conexao.php');

$caminhos_imagens = array();

// Loop para obter os caminhos das imagens de 1 a 20
for ($i = 1; $i <= 21; $i++) {
    $sql = "SELECT `Capa` FROM `modelo` WHERE `Id modelo` = $i";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $endereco_imagem = $row['Capa'];
        $caminhos_imagens[$i] = $endereco_imagem;
    }
}

if (count($caminhos_imagens) > 0) {
    // Exibe as imagens dentro do laço `foreach`
    foreach ($caminhos_imagens as $id => $caminho_imagem) {
        echo '<a href="ceso.php?valor=' . $id . '">';
        echo '<img src="' . $caminho_imagem . '" alt="Imagem">';
        echo '</a>';
    }
} else {
    echo 'Nenhuma imagem encontrada.';
}
?>