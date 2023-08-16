<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['user_email'])) {
    // Redireciona para a página de login se não estiver autenticado
    header('Location: login.php');
    exit();
}

?>