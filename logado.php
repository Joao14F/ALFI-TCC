<?php
    if (!isset($_SESSION['Id usuário'])) {
        echo '<script>alert("Conta necessária"); window.location.href = "login.php";</script>';
    }
?>
