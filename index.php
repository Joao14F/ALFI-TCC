<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="CSS/bootstrap.min.css">
      <script defer src="JS/bootstrap.bundle.min.js"></script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <title>Index</title>
      <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
         * {
            margin: 0;
            padding: 0;
            border: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
         }
         body {
            background-color: #1B2029;
            font-family: Arial, sans-serif;
         }
         header {
            background-color: #1B2029;
            margin: 0px -24px;
            border-bottom: 2px solid #444079;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
         }
         a.logo img {
            width: 35%;
            margin-left: 4rem;
            margin-top: -1rem;
         }
         .botões {
            margin: 5px;
            display: inline-block;
            margin-top: 22px;
            margin-bottom: -30px;
         }

         .CadastraModelo {
            border: 2px solid #8880FE;
            padding: 8px;
            border-radius: 30px;
            font-size: 1.5rem;
            width: 60%;
            background: #1B2029;
         }
         .login {
            border: 2px solid #8880FE;
            padding: 8px;
            border-radius: 30px;
            font-size: 1.5rem;
            width: 30%;
            background: #1B2029;
            margin-right: 2rem;
         }

         .cadastro {
            border: 2px solid #8880FE;
            padding: 8px;
            border-radius: 30px;
            font-size: 1.5rem;
            width: 40%;
            background: #1B2029;
         }
         
         .login:hover{
            background: #8880FE;
            color: white;
            transition: 0.3s all;
         }

         .CadastraModelo:hover{
            background: #8880FE;
            color: white;
            transition: 0.3s all;
         }

         .cadastro:hover{
            background: #8880FE;
            color: white;
            transition: 0.3s all;
         }

         form {
            display: flex;
            align-items: center;
         }      

         input [placeholder] {
            background-color: white;
         }
         input[type="submit"] {
            cursor: pointer;
            width: 25%;
            margin-top: 0.2rem;
            border: 1px 1px 1px white;
            border-radius: 35px;
            background: #1B2029;
            color: white;
            font-size: 1.1rem;
            transition: all .3s ease-in-out;
            margin-left: 12.2em;
         }
         p {
            color: white;
            margin-top: 1rem;
            line-height: 50px;
            text-align: center;
         }
         input {
            border: 1px solid #444079;
            border-radius: 8px;
         }


         /* footer */

         
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*
{
    font-family: "Poppins", sans-serif;
    color: #8880FE;
}

#page-container {
  position: relative;
  min-height: 100vh;
}

#content-wrap {
    padding-bottom: 1rem;    /* altura do rodapé */
}

#footer {
  position: absolute;
  bottom: 0px;
  width: 100%;
  height: 2.5rem;         /* altura do rodapé */
}


body {
    justify-content: center;
    align-content: end;
    min-height: 100vh;
    background: #1B2029;
}
footer {
    position: absolute;
    width: 100%;
    display: grid;
    font-size: 12px;
    background: #1B2029;
    left: 0px;
    padding-bottom: 0rem;
}

h2 {
    font-size: 22px;
}

footer .container {
    width: 100%;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 14rem;
    position: flex;
    background: #1B2029;
    display: flex;
    align-items: flex-start;
}

footer .container .sec h2 {
    position: relative;
    color: white;
    font-weight: 600;
    margin-left: -4rem;
 
}

footer .container .sec p {
    color: #d9d9d9;
    margin-left: -4rem;
    padding-top: 0.1rem;
    text-align: justify;
    margin-right: -6rem;
    line-height: 2;
}

footer .container .quicklinks {
    position: relative;
    align-items: flex-start;
}

footer .container .quicklinks h2 {
    position: relative;
    color: white;
    font-weight: 600;
    margin-left: -3rem;
}

footer .container .quicklinks ul li {
    list-style: none;
}

footer .container .quicklinks ul li a {
    color: #d9d9d9;
    text-decoration: none;
    margin-left: -5rem;
}

footer .container .quicklinks ul li a:hover {
    color: #8880FE;
    transition: 0.3s all;
}

footer .container .contact .info {
    position: relative;
    align-items: flex-start;
}

footer .container .contact h2 {
   
    color: white;
    font-weight: 600;
    margin-left: -8rem;
    margin-right: -3rem;
}

footer .container .contact .info li {
    display: grid;
    grid-template-columns: 30px 1fr;
}

footer .container .contact .info li span {
    font-size: 20px;
}

footer .container .contact .info li a {
    color: #d9d9d9;
    text-decoration: none;
    margin-left: -5rem;
}

footer .container .contact .info li i {
    color: white;
    margin-left: -10rem;
    margin-top: 1.4rem;
}

.copyrightText {
    width: 100%;
    padding: 8px;
    text-align: center;
    color: white;
    background: #1f252f;
    border-top: 1px solid rgba(0,0,0,0.15);
    border-color: #8880FE;
    position: absolute;
    margin-top: 39rem;
}

.copyrightText p {
    color: white; 
}

footer .container .lk a {
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

footer .container .lk a:hover{
    background: #d9d9d9;
}

footer .container .lk p {
    color: #d9d9d9;
    margin-left: -12rem;
    text-align: justify;
    margin-right: -3rem;
    line-height: 2;
}

            

      </style>
      <link rel="icon" type="image/png" href="imagens/navlogo.png">
   </head>
   <body>
      <div class="container-fluid">
         <header>
            <div class="row gx-0">
               <div class="col-12 col-sm-12 col-md-3">
                  <a class="logo" href="index.php">
                     <img src="imagens/logo.png" alt="logo!">
                  </a>
               </div>
               <div class="botões col-12 col-sm-12 col-md-4">
                  <a href="CadastrarModelo.php"><button class="CadastraModelo">Cadastrar Modelo</button></a>
               </div>
               <div class="botões col-12 col-sm-12 col-md-4">
                  <a href="login.php"><button class="login">Login</button></a>
                  <a href="cadastro.php"><button class="cadastro">Cadastro</button></a>
               </div>
            </div>
         </header>
       
         </br>
         </br>
         <?php
            include_once('conexao.php');
           /* for ($i=1; $i = 20; $i++) { 
               $sql = "SELECT `Arquivo` from modelo  WHERE $i";
            $res = mysqli_query($conn, $sql);
            if ($res && mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                $endereco_imagem = $row['Arquivo'];
            
                echo '<img src="' . $endereco_imagem . '" alt="Imagem">';
            } else {
                echo 'Nenhuma imagem encontrada.';
            }
            }*/
         ?>
         </br>
         
         <div class="row">
            <div class="col-12">
               
            </div>
         </div>
      </div>

      <footer id="footer">
    <div class="container">
     <div class="sec sobrenos">
       <h2>Sobre Nós</h2>
       <p>O ALFI é um site de compartilhamento de moldes de roupas, 
        focado em disponibilizar aos usúarios uma plataforma para 
        obter e compartilhar os moldes das roupas desejedas pelos mesmos.</p>
     </div>

     <div class="sec quicklinks">
     <h2>Suporte</h2>
     <ul>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="pdep.php">Política de Privacidade</a></li>
     </ul>
     </div>
     
     <div class="sec contact">
     <h2>Entre em Contato</h2>
     <ul class="info">
        <li>
        <span><i class="fa-solid fa-envelope"></i></span><p><a href="mailto:teamalfi2023@gmail.com">teamalfi2023@gmail.com</a></p>
        </li>
     </ul>
     </div>

     <div class="lk">
     <ul>
        <li>
       <p>Caso queira enviar alguma sugestão, solicitação ou mensagem, você pode nos contatar clicando no botão abaixo:</p>
        </li>
        </ul>
        <a class="" href="testeform.php">Contato</a>
</div>
       
     
     </div>

    

    </div>
</footer>

<div class="copyrightText">
   <p>Copyright © 2023 ALFI All rights reserved.</p>
</div>

</div>
</div>
   </body>
</html>