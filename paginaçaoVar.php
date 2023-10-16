<<<<<<< HEAD

<style>
    .paginaton {
    text-align: center;
    padding-bottom: 1rem;
    padding-top: 2rem;
    
}

.paginaton-link {
    text-decoration: none;
    padding: 10px;
    color: #8880FE;
    border: 2px solid #8880FE;
    padding: 3px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 30px;
    font-size: 1rem;
    background: #1B2029;
}

.paginaton-link:hover {
    color: #ccc;
    border: 2px solid #ccc;
}
    </style>

=======
>>>>>>> fea756968f088a71955626cf84efd418517a88d9
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

$paginas_anteriores = $pagina_atual - 1;
?>