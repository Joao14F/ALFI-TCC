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
         background-color: #D9D7EF;
      }

      form {
         position: fixed;
         top: 30px;
         left: 30px;
         right: 30px;
      }

      .form-group {
         margin: 10px 0px;

      }

      button {
         margin-left: 4px;
      }
   </style>
</head>

<body>
   <form>
      <div class="container-fluid">
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputEmail1">Insira o titulo do modelo</label>
                  <input type="name" class="form-control" id="Nome" placeholder="Titulo">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputEmail1">Insira a descrição do modelo</label>
                  <input type="text" class="form-control" id="Descrição" placeholder="Descrição">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="Select" class="form-label">Selecione o tipo de roupa</label>
                  <select id="Select" class="form-select">
                     <option>Escolha uma das opções</option>
                     <option>Camissa</option>
                     <option>Vestido</option>
                     <option>Calça</option>
                     <option>Umas coisas aí</option>
                     <option>Camiseta</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="Tipo">Insira o arquivo</label>
                  <input type="file" class="form-control" id="Email1" placeholder="E-mail">
               </div>
            </div>
         </div>
         <div class="row gx-0 gy-1">
            <p class="col-1 col-sm-3 col-md-1"></p>
            <button type="submit" class="col-sm-6 col-md-1 btn btn-primary">Cadastrar</button>
         </div>
      </div>
   </form>
</body>

</html>