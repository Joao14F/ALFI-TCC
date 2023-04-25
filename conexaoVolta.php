<?php
$conn = mysqli_connect('localhost','root','','tcc');
if (mysqli_connect_errno()) {
    echo "Falha de conexão com o MySQL: " . mysqli_connect_error();
    exit();
    }
else {
    echo "Sucesso de conexão com o MySQL";
}
$Arquivo = isset($_POST['Arquivo']) ? $_POST['Arquivo']: "";
$Título = isset($_POST['Título']) ? $_POST['Título']: "";
$Tipo = isset($_POST['Tipo']) ? $_POST['Tipo']: "";
$Comprimento = isset($_POST['Comprimento']) ? $_POST['Comprimento']: "";
$Quadril = isset($_POST['Quadril']) ? $_POST['Quadril']: "";
$Cintura = isset($_POST['Cintura']) ? $_POST['Cintura']: "";
$Gancho = isset($_POST['Gancho']) ? $_POST['Gancho']: "";
$Sustentavel = isset($_POST['Sustentavel']) ? $_POST['Sustentavel']: "";

$sql = "INSERT INTO `modelo` (`Arquivo`, `Título`, `Sustentavel`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`) 
VALUES ('$Arquivo', '$Título', '$Tipo', '$Comprimento', '$Quadril', '$Cintura', '$Gancho', '$Sustentavel')"

?>