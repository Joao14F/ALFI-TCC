<?php
$conn = mysqli_connect('localhost','root','','modelo');
if (mysqli_connect_errno()) {
    echo "Falha de conexão com o MySQL: " . mysqli_connect_error();
    exit();
    }
else {
    echo "Sucesso de conexão com o MySQL";
}
$Título = $_POST['Título'];
$Sustentável = $_POST['Sustentável'];
$Tipo = $_POST['Tipo'];
$Comprimento = $_POST['Comprimento'];
$Quadril = $_POST['Quadril'];
$Cintura = $_POST['Cintura'];
$Gancho = $_POST['Gancho'];
$Arquivo = $_POST['Arquivo'];

$sql = "INSERT INTO modelo (`Título`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Arquivo`) 
VALUES ('$Título', '$Sustentável', '$Tipo', '$Comprimento', '$Quadril', '$Cintura', '$Gancho', '$Arquivo')";

if (mysqli_query($conn, $sql)) {
    echo "Deu certo";
}
else {
    echo "Merda";
}

?>