<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/bootstrap.min.css">
   <script defer src="JS/bootstrap.bundle.min.js"></script>
   <title>Index</title>
   <style>
      body {
         background-color: #D9D7EF;
         font-family: Arial, sans-serif;
      }

      header {
         background-color: #57449a;
         margin: 0px -12px;

      }

      .logo {
         background-color: #1f252f;
         color: #fff;
         text-align: center;
      }

      .botões {
         margin: 5px;
      }

      .login {
         border: none;
         background-color: #2b5d8f;
         color: #fff;
         font-size: 16px;
         cursor: pointer;
         border-radius: 3px;
         margin: 2px;
      }

      .cadastro {
         border: none;
         background-color: #0ead78;
         color: #fff;
         font-size: 16px;
         cursor: pointer;
         border-radius: 3px;
         margin: 2px;
      }

      form {
         display: flex;
         align-items: center;
      }

      input[type="text"] {
         border: none;
         border-bottom: 2px solid #ccc;
         font-size: 16px;
         padding: 5px;
         border-radius: 5px;
      }

      button[type="submit"] {
         background-color: #008CBA;
         color: white;
         border: none;
         padding: 5px 5px;
         font-size: 16px;
         border-radius: 4px;
         cursor: pointer;
      }

      button[type="submit"]:hover {
         background-color: #007A8C;
      }

      .menu {
         text-align: center;
      }

      .modelos {
         margin: 8px;
      }

      .modelosimg {
         margin: 10px;
         border-radius: 5px;
      }

      footer {
         background-color: #1f252f;
         padding: 8px;
         text-align: left;
         margin: 0px -14px;
      }

      footer p {
         margin: 10px;
         color: #e8f1f9;
      }
   </style>
</head>

<body>
   <div class="container-fluid">
      <header>
         <div class="row gx-0">
            <div class="col-12 col-sm-12 col-md-3">
               <a class="logo" href="index.php">
                  <h1>ALFI</h1>
               </a>
            </div>
            <div class="botões col-12 col-sm-12 col-md-4">
               <a href="login.php"><button class="login">Login</button></a>
               <a href="cadastro.php"><button class="cadastro">Cadastro</button></a>
            </div>
            <div class="col-12 col-sm-12 col-md-4" role="search">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Search</button>
            </div>

         </div>
         <div class="row">
            <div class="menu col-12 col-sm-12 col-md-12">
               <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ação</a>
                        <a class="dropdown-item" href="#">Outra ação</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Algo mais aqui</a>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </header>
      <div class="row">
         <div class="col-0 col-sm-0 col-md-1">
            <p></p>
         </div>

         <div class="modelos col-12 col-sm-12 col-md-10">

            <a href="acesso-modelo.php">
               <?php
               $conn = mysqli_connect('localhost', 'root', '', 'modelo');
               $result = mysqli_query($conn, "SELECT Arquivo FROM modelo WHERE tipo = 'Saia'");

               $row = mysqli_fetch_assoc($result);
               header("Content-type: image/jpg");
               echo $row['Arquivo'];
               ?>
            </a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>
            <a href="acesso-modelo.php"><img src="imgal.JPG" alt="modelo tal" width="10%" class="modelosimg"></a>

         </div>

         <div class="col-0 col-sm-0 col-md-1">
            <p></p>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <footer>
               <p>Copyright © 2023</p>
               <p>E-mails para contato: stefanymr208@gmail.com e jfranciscobratti@gmail.com</p>
            </footer>
         </div>
      </div>

   </div>
</body>

</html>