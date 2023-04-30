<?php
$conn = mysqli_connect('localhost','root','','tcc');
if (mysqli_connect_errno()) {
    echo "Falha de conexão com o MySQL: " . mysqli_connect_error();

    exit();
    }
else {
    echo "Sucesso de conexão com o MySQL";
}
$Título = $_POST['Título'];
$Sustentável = $_POST['Sustentável'];
$Tipo = $_POST['Tipo'];

if (mysqli_query($conn, $sql)) {
    echo " Deu certo";
}
else {
    echo " Deu merda";
}

?>
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
   <form action="cadastro.php" method="post">
      <div class="container-fluid">
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputEmail1">Insira o seu nome</label>
                  <input type="name" class="form-control" id="InputNome1" placeholder="Nome">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputEmail1">Insira o telefone</label>
                  <input type="telefone" class="form-control" id="InputTelefone1" placeholder="Telefone">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputEmail1">Insira o E-mail</label>
                  <input type="email" class="form-control" id="InputEmail1" placeholder="E-mail">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputPassword1">Insira a senha</label>
                  <input type="password" class="form-control" id="Password1" placeholder="Senha">
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