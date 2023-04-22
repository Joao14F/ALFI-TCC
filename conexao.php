<?php
$conn = mysqli_connect('localhost','root','','tcc');
if (mysqli_connect_errno()) {
    echo "Falha de conexão com o MySQL: " . mysqli_connect_error();
    exit();
    }
else {
    echo "Sucesso de conexão com o MySQL";
}

$sql = "INSERT INTO modelo (titulo, pass, tel) 
VALUES ('$user', '$pass', '$tel')"



?>