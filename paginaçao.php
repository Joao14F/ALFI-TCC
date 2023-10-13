<?php
echo '<div class="row">';
echo '<div class="paginaton">';
if (isset($_GET['pagina'])) {
    if ($pagina_atual > 1) {
        echo '<a href="?pagina=' . ($pagina_atual - 1);
        if (isset($_GET['peça'])) {
            echo '&peça=' . urlencode($_GET['peça']);
        }
        echo '" class="paginaton-link">Anterior</a>' . ' ';

        for ($i = 1; $i <= $paginas_anteriores; $i++) {
            echo '<a href="?pagina=' . $i;
            if (isset($_GET['peça'])) {
                echo '&peça=' . urlencode($_GET['peça']);
            }
            echo '" class="paginaton-link">' . $i . '</a>' . ' ';
        }
    }

    echo '<a href="?pagina=' . $pagina_atual;
    if (isset($_GET['peça'])) {
        echo '&peça=' . urlencode($_GET['peça']);
    }
    echo '" class="paginaton-link">' . $pagina_atual . '</a>' . ' ';


    if ($pagina_atual < $total_paginas) {
        for ($i = $pagina_atual + 1; $i <= $total_paginas; $i++) {
            echo '<a href="?pagina=' . $i;
            if (isset($_GET['peça'])) {
                echo '&peça=' . urlencode($_GET['peça']);
            }
            echo '" class="paginaton-link">' . $i . '</a>' . ' ';
        }
        echo '<a href="?pagina=' . ($pagina_atual + 1);
        if (isset($_GET['peça'])) {
            echo '&peça=' . urlencode($_GET['peça']);
        }
        echo '" class="paginaton-link">Próxima</a>' . ' ';
    }
} else {
    echo '<a href="?pagina=' . '1';
    if (isset($_GET['peça'])) {
        echo '&peça=' . urlencode($_GET['peça']);
    }
    echo '" class="paginaton-link">' . '1' . '</a>' . ' ';
    for ($i = 2; $i <= $total_paginas; $i++) {
        echo '<a href="?pagina=' . $i;
        if (isset($_GET['peça'])) {
            echo '&peça=' . urlencode($_GET['peça']);
        }
        echo '" class="paginaton-link">' . $i . '</a>' . ' ';
    }
}


echo '</div>';
echo '</div>';
