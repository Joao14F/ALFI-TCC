<?php

if(isset($_POST['submit'])) {
    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('E-mail: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone: ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Senha: ' . $_POST['senha']);

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $result= mysqli_query($conn, "INSERT INTO usuário(nome,email,telefone,senha) 
    VALUES ('$nome', '$email', '$telefone', '$senha')");

header('Location: login.php');

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Cadastro</title>

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
    background: #1B2029;
    color: white;
    font-weight: 500;
    display: flex;
    min-height: 100vh;
    min-width: 100vw;
}

main {
    width: 50vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

main h1 {
    color: #8880FE;
    font-size: 3rem;
    margin-bottom: 0.1rem;
    text-align: center;
}

main .social-media a:first-child img {
    margin-left: 0;
}

main form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

main form label {
    display: flex;
    flex-direction: column;
}

main form label span {
    font-size: 1rem;
    margin-top: 1.1rem;
}

main form input {
    background: #161923;
    width: 300px;
    height: 50px;
    padding: 0 0.5rem;
    margin-top: 1rem;
    outline: none;
    color: rgba(166, 166, 166);
    font-size: 1rem;
    border: 1px solid #040B18;
    border-radius: 8px;
}

main form input[type="submit"] {
    cursor: pointer;
    width: 40%;
    margin-top: 2rem;
    border: none;
    border-radius: 32px;
    background: #6C63FF;
    color: white;
    font-size: 1.1rem;
    transition: all .3s ease-in-out;
}

main form input[type="submit"]:hover {
    background: #5952d4;
}

section.images {
    width: 50vw;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    padding: 4rem;
}

section.images img {
    width: 85%;
}

section.images .circle {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background: linear-gradient(45deg, #E8CBC0, #636FA4);
    clip-path: circle(40% at right 80%);
    z-index: -1;
}

@media only screen and (min-width: 900px) and (max-width: 1200px) {
    section.images img {
        width: 110%;
    }

    section.images .circle {
        clip-path: circle(35% at right 80%);
    }
}

@media only screen and (max-width: 900px) {
    section.images {
        display: none;
        visibility: hidden;
    }

    main {
        width: 100vw;
    }
}

@media only screen and (max-width: 450px) {
    main h1 {
        font-size: 2rem;
    }

    main form label span, main form input[type="submit"] {
        font-size: 1rem;
    }

}

   </style>
    
    <link rel="icon" type="image/png" href="imagens/navlogo.png">
</head>
<body>

<a href="index.php"> Voltar </a>
    <main>
        <h1>Crie sua conta</h1>

        <form action="cadastro.php" method="POST">
            <label for="name">
                <span>Insira seu nome</span>
                <input type="text" id="name" name="nome" placeholder="Nome">
            </label>

            <label for="email">
                <span>Insira seu E-mail</span>
                <input type="email" id="email" name="email" placeholder="E-mail">
            </label>

            <label for="telefone">
                <span>Insira seu telefone </span>
                <input type="telefone" id="telefone" name="telefone" placeholder="Telefone">
            </label>

            <label for="password">
                <span>Insira sua senha</span>
                <input type="password" id="senha" name="senha" placeholder="Senha">
            </label>

            <input type="submit" value="Cadastrar" id="button" name="submit">
        </form>
    </main>
    <section class="images">
        <img src="imagens/pessoas.png" alt="pessoas">
        <div class="circle"></div>
    </section>
</body>
</html>