<?php
$conn = mysqli_connect('localhost','root','','modelo');
$result = mysqli_query($conn, "SELECT Arquivo FROM modelo");
$row = mysqli_fetch_assoc($result);
$arquivo = $row['Arquivo'];
header("Content-type: image/jpeg/");
echo $arquivo
?>