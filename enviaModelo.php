<?php
include_once('conexao.php');

$Título = $_POST['Título'];
$Sustentável = $_POST['Sustentável'];
$Tipo = $_POST['Tipo'];

if ($Tipo == 'Saia') {
    $Comprimento = $_POST['Comprimento'];
    $Quadril = $_POST['Quadril'];
    $Cintura = $_POST['Cintura'];

    if (isset($_FILES['Arquivo'])) {
        
        $ponto = strtolower(pathinfo($_FILES['Arquivo']['name'], PATHINFO_EXTENSION));
        $pasta = 'Arquivos/';
        $nome = uniqid().'.'.$ponto;
        $temporario = $_FILES['Arquivo']['tmp_name'];
       
        if ($ponto =!'jpg' || $ponto =!'png' || $ponto =!'pdf') {
            echo 'Apenas arquivos jpg, png e pdf são aceitos';
            exit();
        }
        else {
            if(move_uploaded_file($temporario, $pasta. $nome)){
                echo 'Arquivo enviado com sucesso';
                $Arquivo = $pasta. $nome;
           }
           else{
            echo 'Erro';
           }
        }
    }
        $sql = "INSERT INTO modelo (`Título`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Arquivo`) 
    VALUES ('$Título', '$Sustentável', '$Tipo', '$Comprimento', '$Quadril', '$Cintura', '$Arquivo')";
}
if ($Tipo == 'Calça') {
    $Comprimento = $_POST['Comprimento'];
    $Quadril = $_POST['Quadril'];
    $Cintura = $_POST['Cintura'];
    $Gancho = $_POST['Gancho'];
    
    if (isset($_FILES['Arquivo'])) {
        
        $ponto = strtolower(pathinfo($_FILES['Arquivo']['name'], PATHINFO_EXTENSION));
        $pasta = 'Arquivos/';
        $nome = uniqid().'.'.$ponto;
        $temporario = $_FILES['Arquivo']['tmp_name'];
       
        if ($ponto =!'jpg' || $ponto =!'png' || $ponto =!'pdf') {
            echo 'Apenas arquivos jpg, png e pdf são aceitos';
            exit();
        }
        else {
            if(move_uploaded_file($temporario, $pasta. $nome)){
                echo 'Arquivo enviado com sucesso';
                $Arquivo = $pasta. $nome;
           }
           else{
            echo 'Erro';
           }
        }
    }
        $sql = "INSERT INTO modelo (`Título`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Gancho`, `Arquivo`) 
    VALUES ('$Título', '$Sustentável', '$Tipo', '$Comprimento', '$Quadril', '$Cintura', '$Gancho', '$Arquivo')";
}

if ($Tipo == 'Bermuda') {
    $Comprimento = $_POST['Comprimento'];
    $Quadril = $_POST['Quadril'];
    $Cintura = $_POST['Cintura'];
    $Gancho = $_POST['Gancho'];
    
    if (isset($_FILES['Arquivo'])) {
        
        $ponto = strtolower(pathinfo($_FILES['Arquivo']['name'], PATHINFO_EXTENSION));
        $pasta = 'Arquivos/';
        $nome = uniqid().'.'.$ponto;
        $temporario = $_FILES['Arquivo']['tmp_name'];
       
        if ($ponto =!'jpg' || $ponto =!'png' || $ponto =!'pdf') {
            echo 'Apenas arquivos jpg, png e pdf são aceitos';
            exit();
        }
        else {
            if(move_uploaded_file($temporario, $pasta. $nome)){
                echo 'Arquivo enviado com sucesso';
                $Arquivo = $pasta. $nome;
           }
           else{
            echo 'Erro';
           }
        }
    }
        $sql = "INSERT INTO modelo (`Título`, `Sustentável`, `Tipo`, `Comprimento`, `Quadril`, `Cintura`, `Arquivo`) 
    VALUES ('$Título', '$Sustentável', '$Tipo', '$Comprimento', '$Quadril', '$Cintura', '$Arquivo')";
}

if (mysqli_query($conn, $sql)) {
    echo '</br>';
    echo " Deu certo";
} else {
    echo '</br>';
    echo " Deu merda";
}