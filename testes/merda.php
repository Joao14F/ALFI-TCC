<?php
$conn = mysqli_connect('localhost', 'root', '', 'testando');
if (mysqli_connect_errno()) {
    echo "Falha de conexão com o MySQL: " . mysqli_connect_error();

    exit();
}
$nome = "eu";
$sql = "INSERT INTO a (`Nome`) VALUES ('$nome')";
if (mysqli_query($conn, $sql)) {
    echo " Deu certo";
} else {
    echo " Deu merda";
}

$select = "SELECT `aa` FROM `a` ORDER BY `aa` ASC
LIMIT 1;";
$res = mysqli_query($conn, $select);

if ($res) {
    $row = mysqli_fetch_assoc($res);
    $resposta = $row['aa'];
    echo $resposta;
} else {
    echo "Não foi encontrado nenhum resultado";
}
?>