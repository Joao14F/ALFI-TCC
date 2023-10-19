<?php
include_once('conexao.php');
session_start();
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (isset($_GET['valor'])) {
        $valor = $_GET['valor'];
        $locais = ['acesso.php', 'ADMacesso'];
    } else {
        $locais = ['index.php', 'adm.php'];
    }
    // Consulta para verificar na tabela 'usuário'
    $sql = "SELECT * FROM `usuário` WHERE `E-mail usuário` = ? AND `Senha usuário` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $res = $stmt->get_result();
    
    if ($res && mysqli_num_rows($res) > 0) {
        $_SESSION = mysqli_fetch_assoc($res);
        header('Location: ' . $locais[0] . '?valor=' . urlencode($valor));
        exit();
    }

    // Consulta para verificar na tabela 'moderador'
    $sql = "SELECT * FROM `moderador` WHERE `E-mail moderador` = ? AND `Senha moderador` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($res && mysqli_num_rows($res) > 0) {
        $_SESSION = mysqli_fetch_assoc($res);
        header('Location: ' . $locais[1] . '?valor=' . urlencode($valor));
        exit();
    }

    header('Location: login.php?error=invalid_credentials');
    exit();
}
?>
