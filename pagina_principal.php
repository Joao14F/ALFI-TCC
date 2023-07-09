<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{   
    unset($_SESSION['email']); 

    unset($_SESSION['senha']); 

    header('Location: login.php');
}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Página Inicial</title>

    <link rel="icon" type="image/png" href="imagens/navlogo.png">
</head>
<body>
    <?php
echo "<h1>Bem Vindo <u>$logado</u></h1>";
    ?>

    <div class="d-flex">
    <a href="sair.php" class="btn btn-danger me-5"> Sair </a>
</div>
</body>
</html>