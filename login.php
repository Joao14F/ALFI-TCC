
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
    margin-bottom: 3rem;
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
    font-size: 1.1rem;
    margin-top: 2rem;
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
    width: 50%;
    margin-top: 4rem;
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
    width: 88%;
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

a {
    cursor: pointer;
    border: 2rem;
    border-radius: 32px;
    background: #8880FE;
    color: white;
    font-size: 1rem;
    transition: all .3s ease-in-out;
    margin-left: 0.5rem;
    margin-top: 2rem;
    margin-bottom: 40rem;

    }

   </style>

<link rel="icon" type="image/png" href="imagens/navlogo.png">

</head>
<body>

<a class="voltar" href="index.php"> Voltar </a>
    <main>
        <h1>Logue sua conta</h1>
        
        <form action="testelogin.php" method="POST">
            

            <label for="email">
                <span>E-mail</span>
                <input type="text" id="email" name="email" placeholder="E-mail">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="senha" name="senha" placeholder="Senha">
            </label>

            <input class="" type="submit" name="submit" value="Logar" >
        </form>
    </main>
    <section class="images">
        <img src="imagens/mcostura.png" alt="mcostura">
        <div class="circle"></div>
    </section>
</body>
</html>