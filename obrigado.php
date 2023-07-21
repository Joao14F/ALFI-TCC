<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimento</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

* {
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
}

body {
    min-height: 100vh;
    background: #1B2029;
}

h1.ttl {
    color: #8880FE;
    padding: 2rem;
    font-size: 45px;
    position: absolute;
    padding-top: 5rem;
}

p.par {
    color: white;
    font-size: 20px;
    text-align: justify;
    padding: 2rem;
    padding-top: 12rem;
}

section {
    padding: 10px 45px;
    width: 500px;
}

section.images {
    width: 100%;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
}

section.images img {
    width: 85%;
    margin-left: 47rem;
    margin-top: -5rem;
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

a.bt{
    cursor: pointer;
    width: 8%;
    border: none;
    border-radius: 32px;
    background: #8880FE;
    color: white;
    font-size: 1.3rem;
    transition: all .3s ease-in-out;
    text-align: center;
    padding: 5px;
    text-decoration: none;
    position: absolute;
    margin-left: 1.8rem;
}

a.bt:hover {
    background: #5952d4;
}

</style>


</head>
<body>
    <h1 class="ttl">Obrigado pela mensagem!</h1>

    <p class="par">Em breve entraremos em contato!
       fique atento </br> ao endereço de e-mail 
       informado na mensagem.
    </p>

    <a class="bt"href="pagina_principal.php">Voltar</a>

    <section class="images">
<img src="imagens/obg2.png" alt="imgobg">
        <div class="circle"></div>
    </section>
</body>
</html>