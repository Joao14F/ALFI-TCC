<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/bootstrap.min.css">
   <title>Cadastro</title>
   <style>
      body{
         background-color: #1B2029;
      }
      .centerbar {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100%;
      }
   </style>
   <script>
        function select_iframe(iframe_name){
            document.querySelector('.aqui').setAttribute('src', iframe_name)
        }
    </script>
</head>
<body>
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12 col-md-12">
            <div class="form-grou9p">
               <section class="section_form">
                  <aside class="sidebar">
                     <label for="select-options">Selecione o tipo de roupa</label>
                     <select id="select-options" class="form-select" name="Tipo" onchange="select_iframe(this.value)">
                        <option>Selecione uma das opções</option>
                        <option value="cadastrarSaia.php">Saia</option>
                        <option value="cadastrarCalça.php">Calça</option>
                        <option value="cadastrarBermuda.php">Bermuda</option>
                     </select>
                  </aside>                          
               </section>
            </div>
         </div>
      </div>
      <div class="row">
         <aside class="centerbar">
            <iframe src="" name="janela" class="aqui" width="100%" height="540pt"></iframe>
         </aside>
      </div>
   </div>
</body>
</html>