<?php
if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
    if (!isset($_SESSION['Id usuário'])) {
        echo '<script>alert("Conta necessária"); window.location.href = "login.php?valor=' . $valor . '";</script>';
    }
} else {
    if (!isset($_SESSION['Id usuário'])) {
        echo '<script>alert("Conta necessária"); window.location.href = "login.php";</script>';
    }
}
