<?php
$conn = mysqli_connect('localhost','root','','modelo');

// Executa a consulta SQL
$result = mysqli_query($conn, "SELECT arquivo FROM modelo WHERE tipo = 'Saia'");

$row = mysqli_fetch_assoc($result);
header("Content-type: image/jpeg");
echo $row['imagem'];
?>