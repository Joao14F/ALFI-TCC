<?php
$arquivo = fopen("teste.txt", "a");
fwrite($arquivo, "Olá Mundo!");
fwrite($arquivo, "\nOlá Mundo 2!");
fclose($arquivo);