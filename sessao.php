<?php
include_once('conexao.php');
session_start();

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Realiza a consulta no banco de dados para verificar se o email e senha existem
    $sql = "SELECT `Id usuário` FROM `usuário` WHERE `E-mail usuário` = ? AND `Senha usuário` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res && mysqli_num_rows($res) > 0) {
        // Caso as credenciais sejam válidas, armazena o email na sessão
        $usuario = mysqli_fetch_assoc($res);
        $_SESSION['E-mail usuário'] = $usuario['E-mail usuário'];

        // Redireciona para index.php após autenticação bem-sucedida
        header('Location: index.php');
        exit();
    } else {
        // Redireciona de volta para a página de login se as credenciais forem inválidas
        echo '<script>alert("Dados inválidos"); window.location.href = "login.php";</script>';

        exit();
    }
}

if (!isset($_SESSION['E-mail usuário'])) {
    // Redireciona para a página de login se não estiver autenticado
    echo '<script>alert("Erro de autenticação"); window.location.href = "login.php";</script>';

    exit();
}

// Resto do seu código após a autenticação...
?>
