<?php
echo '<div class="row">';
echo '<div class="paginaton">';

if ($pagina_atual > 1) {
    echo '<a href="?pagina=' . ($pagina_atual - 1);
    if (isset($_GET['peça'])) {
        echo '&peça=' . urlencode($_GET['peça']);
    }
    echo '" class="paginaton-link">Anterior</a>' . ' ';
}

for ($i = 1; $i <= $total_paginas; $i++) {
    echo '<a href="?pagina=' . $i;
    if (isset($_GET['peça'])) {
        echo '&peça=' . urlencode($_GET['peça']);
    }
    echo '" class="paginaton-link">' . $i . '</a>' . ' ';
}

if ($pagina_atual < $total_paginas) {
    echo '<a href="?pagina=' . ($pagina_atual + 1);
    if (isset($_GET['peça'])) {
        echo '&peça=' . urlencode($_GET['peça']);
    }
    echo '" class="paginaton-link">Próxima</a>' . ' ';
}

echo '</div>';
echo '</div>';

?>