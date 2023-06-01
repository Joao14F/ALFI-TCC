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
         background-color: #8880FE;
         margin: 0px -12px;
         border-bottom: 2px solid #444079;

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
         background-color: black;
      }

      footer {
         background-color: #1f252f;
         padding: 6px;
         text-align: left;
         margin: 0px -14px;
      }

      footer p {
         margin: 3px;
         color: #e8f1f9;
         text-align: center;
      }
      
      input[type="search"] {
    cursor: pointer;
    width: 50%;
    margin-top: 1rem;
    border: none;
    border-radius: 32px;
    background: #1B2029;
    color: white;
    font-size: 2rem;
    transition: all .3s ease-in-out;
    text-align: center;
}

input[type="search"] {
    background: #1B2029;
    font-size: 1rem;
    float: right;
}

input ["placeholder"] {
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

button.login {
   background: #1B2029;
    cursor: pointer;
    width: 22%;
    margin-top: 1.8rem;
    border: none;
    border-radius: 32px;
    color: white;
    font-size: 1.5rem;
    transition: all .3s ease-in-out;
}

button.cadastro {
   background: #1B2029;
    cursor: pointer;
    width: 30%;
    margin-top: 0.6rem;
    border: none;
    border-radius: 32px;
    color: white;
    font-size: 1.5rem;
    transition: all .3s ease-in-out;
}

input {
    border: 1px solid #444079;
    border-radius: 8px;
}

section.images {
   width: 45vw;
    display: flex;
    margin-left: 140px;
    float: left;
    margin-top: 50px;
}

section.images img {
    width: 65%;
}

h2 {
   color: #8880FE;
    font-size: 4rem;
    margin-top: 8.5rem;
    margin-right: 11rem;
    margin-bottom: 1px;
    text-decoration: underline;
    text-decoration-color: #444079;
}

p#ptitulo {
   font-size: 1rem;
   margin-right: 14.5rem;
   margin-top: 0px;
   text-decoration: underline;
   text-decoration-color: #444079;
}

p#pp {
   text-align: justify;
   padding: 3rem;
   text-shadow: #444079 0.1em 0.1em 0.2em;
}

a.logo img {
   width: 35%;
   margin-left: 4rem;
   margin-top: -1rem;
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
               <a href="login.php"><button class="login">Login</button></a>
               <a href="cadastro.php"><button class="cadastro">Cadastro</button></a>
            </div>
            <div class="col-12 col-sm-12 col-md-4" role="search">
               <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
               <input type="submit" value="Pesquisar" id="button">
            </div>

         </div>
        
      </header>

      <section class="images">
        <img src="imagens/bvindo.png" alt="bemvindo!">
    </section>

    <h2> Bem vindo ao ALFI!!</h2>

    <p id="ptitulo"> Seu site de compartilhamento de moldes</p>

</br>
</br>
</br>

    <p id="pp">O ALFI é um site de compartilhamento de moldes de roupas, focado em disponibilizar aos usúarios uma plataforma para obter e compartilhar os moldes
       das roupas desejedas pelos mesmos. Fique ciente que este site ainda está em desenvolvimento portanto, alguns erros podem ocorrer em relação a responsividade, login, cadastro e entre outros. Com isso, qualquer erro identificado irá ser corrigido o mais rápido possível pelos Devs para que estes erros não afetem sua experiência com o site. 
    </p>

      
      <div class="row">
         <div class="col-12">
            <footer>
               <p> E-mails para contato: stefanymr208@gmail.com e jfranciscobratti@gmail.com
   </br>
                  Copyright © 2023 ALFI
               </p>
            </footer>
         </div>
      </div>

   </div>
</body>

</html>