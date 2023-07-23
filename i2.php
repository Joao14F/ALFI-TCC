<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/png" href="imagens/navlogo.png">
   <title>Index</title>

   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

   <style>
      /* Global styles */
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

      * {

         font-family: "Poppins", sans-serif;
      }

      body {
         background-color: #1B2029;
         font-family: Arial, sans-serif;
         background: #1B2029;
      }

      /* Header styles */
      header {
         background-color: #1B2029;
         border-bottom: 2px solid #444079;
      }

      a.logo img {
         width: 35%;
      }

      .botões {}

      .CadastraModelo {
         border: 2px solid #8880FE;
         padding: 8px;
         border-radius: 30px;
         font-size: 1.5rem;
         width: 60%;
         background: #1B2029;
         color: #8880FE;
      }

      .login {
         border: 2px solid #8880FE;
         padding: 8px;
         border-radius: 30px;
         font-size: 1.5rem;
         width: 30%;
         background: #1B2029;
         margin-right: 2rem;
         color: #8880FE;
      }

      .cadastro {
         border: 2px solid #8880FE;
         padding: 8px;
         border-radius: 30px;
         font-size: 1.5rem;
         width: 40%;
         background: #1B2029;
         color: #8880FE;
      }

      .CadastraModelo:hover,
      .login:hover,
      .cadastro:hover {
         background: #8880FE;
         color: white;
         transition: 0.3s all;
      }

      .dropdown-menu {}

      /* Footer styles */
      footer {
         font-size: 12px;
         background: #1B2029;
         height: 2.5rem;
         /* altura do rodapé */
      }

      h2 {
         font-size: 22px;
      }

      .caixote {
         width: 100%;
         background: #1B2029;
      }

      .caixote .sec h2 {
         color: white;
         font-weight: 600;
      }

      .caixote .sec p {
         color: #d9d9d9;
         padding-top: 0.1rem;
         text-align: justify;
         line-height: 2;
      }

      .caixote .quicklinks {}

      .caixote .quicklinks h2 {
         color: white;
         font-weight: 600;
      }

      .caixote .quicklinks ul li {
         list-style: none;
      }

      .caixote .quicklinks ul li a {
         color: #d9d9d9;
         text-decoration: none;
      }

      .caixote .quicklinks ul li a:hover {
         color: #8880FE;
         transition: 0.3s all;
      }

      .caixote .contact {}

      .caixote .contact h2 {
         color: white;
         font-weight: 600;
      }

      .caixote .contact ul li {}

      .caixote .contact ul li span {
         font-size: 20px;
      }

      .caixote .contact ul li a {
         color: #d9d9d9;
         text-decoration: none;
      }

      .caixote .contact ul li i {
         color: white;
      }

      .xinga {
         cursor: pointer;
         width: 15%;
         border: none;
         border-radius: 32px;
         background: white;
         color: #161923;
         font-size: 0.9rem;
         transition: all .3s ease-in-out;
         text-align: center;
         padding: 5px;
         text-decoration: none;
         margin-left: -10.1rem;
      }

      .xinga:hover {
         background: #d9d9d9;
      }

      .copyrightText {
         width: 100%;
         padding: 8px;
         text-align: center;
         color: white;
         background: #1f252f;
         border-top: 1px solid rgba(0, 0, 0, 0.15);
         border-color: #8880FE;
      }

      .copyrightText p {
         color: white;
      }
   </style>
</head>

<body>
   <div class="container-fluid">
      <header>
         <div class="row">
            <div class="col-sm-12 col-md-3">
               <a class="logo" href="index.php">
                  <img src="imagens/logo.png" alt="logo!">
               </a>
            </div>
            <div class="botões col-sm-12 col-md-4">
               <a href="CadastrarModelo.php"><button class="CadastraModelo">Cadastrar Modelo</button></a>
            </div>

            <div class="botões col-sm-12 col-md-4">
               <a href="login.php"><button class="login">Login</button></a>
               <a href="cadastro.php"><button class="cadastro">Cadastro</button></a>
            </div>
            <div class="col-md-1"></div>
         </div>
      </header>
      <div class="row">
         <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Modelos
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Saias</a></li>
                        <li><a class="dropdown-item" href="#">Calças</a></li>
                        <li><a class="dropdown-item" href="#">Bermuda</a></li>
                        <li>
                           <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
      <footer>
         <div class="caixote">
            <div class="row">
               <div class="sec sobrenos col-sm-12 col-md-4">
                  <h2>Sobre Nós</h2>
                  <p>O ALFI é um site de compartilhamento de moldes de roupas,
                     focado em disponibilizar aos usúarios uma plataforma para
                     obter e compartilhar os moldes das roupas desejedas pelos mesmos.
                  </p>
               </div>

               <div class="sec quicklinks col-sm-12 col-md-4">
                  <h2>Suporte</h2>
                  <ul>
                     <li><a href="FAQ.php">FAQ</a></li>
                     <li><a href="pdep.php">Política de Privacidade</a></li>
                  </ul>
               </div>

               <div class="sec contact col-sm-12 col-md-4">
                  <h2>Entre em Contato</h2>
                  <ul class="info">
                     <li>
                        <p>Caso queira enviar alguma sugestão, solicitação ou mensagem, você pode nos contatar clicando no botão abaixo ou através do e-mail: <a href="mailto:teamalfi2023@gmail.com" class="mail">teamalfi2023@gmail.com</a></p>
                     </li>
                     <a class="xinga" href="testeform.php">Contato</a>
                  </ul>
               </div>
            </div>
         </div>
         <div class="copyrightText">
            <p>Copyright © 2023 ALFI All rights reserved.</p>
         </div>
      </footer>
   </div>
</body>

</html>