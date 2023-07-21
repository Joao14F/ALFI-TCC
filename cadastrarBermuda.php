<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/bootstrap.min.css">
   <title>Cadastro</title>

   <style>

      body {
         background-color: #1B2029;
         color: #8880FE;
      }

      .form-group {
         margin: 10px 0px;

      }

      button {
         cursor: pointer;
         width: 50%;
         margin-top: 2.5rem;
         border: none;
         border-radius: 32px;
         background: #6C63FF;
         color: white;
         font-size: 1.1rem;
         transition: all .3s ease-in-out;
         padding: 5px;
         margin-right: 10rem;
}

button:hover {
    background: #5952d4;
}
   </style>
     <script>
        function exibirFormulario() {
          var formulario = document.getElementById("formulario");
          formulario.style.display = "block";
        };
    </script>
</head>

<body>
   <form enctype="multipart/form-data" action="enviaModelo.php" method="POST">
      <div class="container-fluid">
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo do modelo</label>
                  <input type="name" class="form-control" id="Nome" placeholder="Titulo" name="Título">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label class="label">
                     É Sustentável
                  </label>
                  <br>
                  <input type="radio" value="Sim" name="Sustentável">
                  <label class="label">
                     Sim
                  </label>
                  <input type="radio" value="Não" name="Sustentável">
                  <label class="label">
                     Não
                  </label>
               </div>
               <div id="form-fields" class="row"></div>
                    <form id="formulario">
                    <div class="form-group">
                        <label class="areas" for="Comprimento">Insira o comprimento em centimetros</label>
                        <input type="text" class="form-control" placeholder="Comprimento">
                    </div>
                        <br>
                        <div class="form-group">
                        <label class="areas" for="Quadril">Insira o comprimento do quadril em centimetros</label>
                        <input type="text" class="form-control" placeholder="Quadril">
                        </div>
                        <br>
                        <div class="form-group">
                        <label class="areas" for="Cintura">Insira o comprimento da cintura em centimetros</label>
                        <input type="text" class="form-control" placeholder="Cintura">
                        </div>
                        <br>
                        <div class="form-group">
                        <label class="areas" for="Gancho">Insira o comprimento do gancho em centimetros</label>
                        <input type="text" class="form-control" placeholder="Gancho">
                        </div>
                    </form>
               <div class="row">

                  <div class="col-sm-12 col-md-10">
                     <div class="form-group">
                        <label for="Tipo">Insira o arquivo</label>
                        <input type="file" class="form-control" placeholder="E-mail" name="Arquivo">
                     </div>
                  </div>
               </div>
               <div class="row gx-0 gy-1">
                  <p class="col-1 col-sm-3 col-md-1"></p>
                  <button type="submit" value="Enviar">Cadastrar</button>
               </div>
            </div>
   </form>

</body>

</html>