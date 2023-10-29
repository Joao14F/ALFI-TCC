<?php
$resultados_por_pagina = 18;
if (isset($_GET['pagina']) && is_numeric($_GET['pagina'])) {
    $pagina_atual = $_GET['pagina'];
} else {
    $pagina_atual = 1;
}
$offset = ($pagina_atual - 1) * $resultados_por_pagina;
$paginas_anteriores = $pagina_atual - 1;
?>