<?php
$res_total = mysqli_query($conn, $sql_total);
$row_total = mysqli_fetch_assoc($res_total);
$total_resultados = $row_total['total'];
$total_paginas = ceil($total_resultados / $resultados_por_pagina);
?>