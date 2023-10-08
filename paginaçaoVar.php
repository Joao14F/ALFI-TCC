


<?php
$resultados_por_pagina = 18;
if (isset($_GET['pagina']) && is_numeric($_GET['pagina'])) {
    $pagina_atual = $_GET['pagina'];
} else {
    $pagina_atual = 1;
}
$offset = ($pagina_atual - 1) * $resultados_por_pagina;

$sql_total = "SELECT COUNT(*) AS total FROM `modelo`";
$res_total = mysqli_query($conn, $sql_total);
$row_total = mysqli_fetch_assoc($res_total);
$total_resultados = $row_total['total'];
$total_paginas = ceil($total_resultados / $resultados_por_pagina);
?>