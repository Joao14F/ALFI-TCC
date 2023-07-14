<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{   
    unset($_SESSION['email']); 

    unset($_SESSION['senha']); 

    header('Location: login.php');
}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Página Inicial</title>

    <link rel="icon" type="image/png" href="imagens/navlogo.png">

    <style>

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
    position: flex;
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
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 14rem;
    position: flex;
    background: #1B2029;
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
}

footer .container .quicklinks {
    position: relative;
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

footer .container .contact .info {
    position: relative;
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
    margin-left: -6rem;
}

footer .container .contact .info li i {
    color: white;
    margin-left: -10rem;
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
    margin-top: 7rem;
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
    padding-top: 0.1rem;
    text-align: justify;
    margin-right: -3rem;
}

</style>

</head>

<body>
<div id="page-container">
   <div id="content-wrap">

    <?php
echo "<h1>Bem Vindo <u>$logado</u></h1>";
    ?>

    <div class="d-flex">
    <a href="sair.php" class="btn btn-danger me-5"> Sair </a>
</div>

</br>

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
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Política de Privacidade</a></li>
        <li><a href="#">Ajuda</a></li>
        <li><a href="#">Contato</a></li>
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