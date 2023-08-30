<?php
    if (!isset($_SESSION['Id moderador'])) {
        echo '<script>alert("Conta necessária"); window.location.href = "login.php";</script>';
    }
?>
