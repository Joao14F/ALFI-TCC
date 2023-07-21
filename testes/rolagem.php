<!DOCTYPE html>
<html>
<head>
  <title>Galeria com Rolagem Lateral</title>
  <link rel="stylesheet" href="style.css">

  <style>
    div.scrollmenu {
    background-color: #333;
    overflow: hidden; /* Oculta a barra de rolagem vertical */
    }

    .trilho_classe {
    overflow-x: hidden; /* Oculta a barra de rolagem horizontal */
    white-space: nowrap;
    }

    .trilho_classe_Contents {
    display: inline-flex;
    }

    /* Estilize os botões de rolagem se desejar */
    button {
    background-color: #777;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
    }

    button:hover {
    background-color: #444;
    }

  </style>

</head>
<body>
  <div class="scrollmenu">
    <div class="trilho_classe" id="trilho">
      <div class="trilho_classe_Contents">
        <img src="imagem1.jpg" alt="Imagem 1">
        <img src="imagem2.jpg" alt="Imagem 2">
        <img src="imagem3.jpg" alt="Imagem 3">
        <!-- Adicione outras imagens aqui -->
      </div>
    </div>
    <button onclick="scrollGaleria(-100)">&#10094; Anterior</button>
    <button onclick="scrollGaleria(100)">Próximo &#10095;</button>
  </div>

  <script>
    // Obtém o elemento da galeria e a largura do trilho
const trilho = document.getElementById('trilho');
const trilhoWidth = trilho.scrollWidth;

// Função para rolar a galeria
function scrollGaleria(scrollAmount) {
  trilho.scrollBy({
    top: 0,
    left: scrollAmount,
    behavior: 'smooth'
  });
}
  </script>
</body>
</html>