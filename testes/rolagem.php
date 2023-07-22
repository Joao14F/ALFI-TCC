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
    margin: 0px 50px;
    }

    .trilho_classe_Contents {
    display: inline-flex;
    }

    img {
      width: 130px;
      margin: 10px;
      border: solid green;
      border-radius: 7px;
    }

    /* Estilize os botões de rolagem se desejar */
    button {
    background-color: #777;
    color: white;
    padding: 55px 10px;
    border: none;
    cursor: pointer;
    font-size: 25pt;
    }

    button:hover {
    background-color: #444;
    }

    .volta {
      float: left;
    }

    .vai {
      float: right;
    }
  </style>

</head>
<body>
  <div class="scrollmenu">
  <button onclick="scrollGaleria(-100)" class="volta">&#10094;</button>
  <button onclick="scrollGaleria(100)" class="vai">&#10095;</button>
    <div class="trilho_classe" id="trilho">
      <div class="trilho_classe_Contents">
        <img src="../imagens/bvindo.png" alt="Imagem 1">
        <img src="../imagens/bvindo.png" alt="Imagem 2">
        <img src="../imagens/bvindo.png" alt="Imagem 3">
        <img src="../imagens/bvindo.png" alt="Imagem 4">
        <img src="../imagens/bvindo.png" alt="Imagem 5">
        <img src="../imagens/bvindo.png" alt="Imagem 6">
        <img src="../imagens/bvindo.png" alt="Imagem 7">
        <img src="../imagens/bvindo.png" alt="Imagem 8">
        <img src="../imagens/bvindo.png" alt="Imagem 9">
        <img src="../imagens/bvindo.png" alt="Imagem 10">
        <img src="../imagens/bvindo.png" alt="Imagem 6">
        <img src="../imagens/bvindo.png" alt="Imagem 11">
        <img src="../imagens/bvindo.png" alt="Imagem 12">
        <img src="../imagens/bvindo.png" alt="Imagem 13">
        <img src="../imagens/bvindo.png" alt="Imagem 14">
        <img src="../imagens/bvindo.png" alt="Imagem 15">
        <img src="../imagens/bvindo.png" alt="Imagem 16">
        <img src="../imagens/bvindo.png" alt="Imagem 17">
        <img src="../imagens/bvindo.png" alt="Imagem 18">
        <img src="../imagens/bvindo.png" alt="Imagem 19">
        <img src="../imagens/bvindo.png" alt="Imagem 20">
        <img src="../imagens/bvindo.png" alt="Imagem 21">
      </div>
    </div>
  </div>
  

  <script>
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