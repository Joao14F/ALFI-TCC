<?php
$nome = isset($_POST['nome']) ? $_POST['nome']: "";
$senha = isset($_POST['senha']) ? $_POST['senha']: "";
$passConfirm = isset($_POST['passConfirm']) ? $_POST['passConfirm']: "";
if ($senha == $passConfirm) {
echo "Olá! Bem-vindo";
} else {
    echo "senha incorreta";
    header("Refresh: 3; url=form.php");
}
?>