<?php
session_start();

// print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
{ 
  include_once('conexao.php');
  $email = $_POST['email'];
  $senha = $_POST['senha'];

// print_r('E-mail: ' . $email);
// print_r('<br>');
// print_r('Senha: ' . $senha);

$sql = "SELECT * FROM usuário WHERE `E-mail usuário` = '$email' and `Senha usuário` = '$senha'";

$result = $conn->query($sql);

// print_r('$sql');
// print_r('$result');

if (mysqli_num_rows($result) < 1) {
    unset($_SESSION['email']); 
    unset($_SESSION['senha']);
    
    header('Location: login.php');
} else {
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
header('Location: pagina_principal.php');
}
}
?>