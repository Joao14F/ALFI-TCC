<?php
include('sessao.php');
session_unset();
session_destroy();
header('Location: index.php');
?>