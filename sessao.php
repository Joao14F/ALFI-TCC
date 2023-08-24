<?php
session_start();

include_once('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
     $sql = "SELECT `Id usuário` FROM `usuário` WHERE `E-mail usuário` = ? AND `Senha usuário` = ?";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("ss", $email, $senha);
     $stmt->execute();
     $res = $stmt->get_result();

    if ($res && mysqli_num_rows($res) > 0) {
        $_SESSION = mysqli_fetch_assoc($res);
        print_r($_SESSION);
        //header('Location: index.php');
        exit();
    } else {
       // header('Location: login.php?error=invalid_credentials');
        exit();
    }
}
?>