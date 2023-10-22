<?php
include_once('conexao.php');

if (isset($_POST['valor'])) {
    $valor = $_POST['valor'];
    
    $sql = "SELECT `Id modelo` FROM `modelo` WHERE `Id modelo` = $valor";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        
        $sqlDelete = "DELETE FROM `modelo` WHERE `Id modelo` = $valor";
        $resultadoDelete = mysqli_query($conn, $sqlDelete);

        if ($resultadoDelete) {
            echo '<script>alert("Modelo deletado com sucesso"); window.location.href = "index.php";</script>';
        } else {
            echo '<script>alert("Erro ao excluir o modelo"); window.location.href = "acesso.php?valor=' . $valor . '";</script>';
        }

        mysqli_free_result($res);
    } else {
        echo '<script>alert("Modelo nao encontrado"); window.location.href = "index.php";</script>';
    }
}
?>
