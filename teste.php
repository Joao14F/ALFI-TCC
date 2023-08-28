<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$pagina_completa = $_SERVER['REQUEST_URI'];
$partes_url = parse_url($pagina_completa);
$caminho = $partes_url['path'];

echo  $caminho;

echo  $partes_url;

echo  $caminho; 
?>
</body>
</html>