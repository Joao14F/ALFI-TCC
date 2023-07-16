<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testeform</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background: #1B2029;
}

section {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 10px 45px;
    width: 500px;
}

section h2{
    color: #8880FE;
    font-size: 40px;
    margin: 0.7rem;
    text-align: center;
}

section form {
    display: flex;
    flex-direction: column;
    width: 100%;
    align-items: center;
}

form label {
    margin-bottom: 2px;
    margin-top: 9px;
    color: white;
    font-size: 17px;
    flex-direction: column;
    display: flex;
}

label.msg {
    margin-left: -12.6rem;
}

label.txt {
    margin-left: -15rem;
}

label.nm {
    margin-left: -15rem;
    margin-bottom: -1.3px;
}

form input {
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

form textarea {
    background: #161923;
    width: 300px;
    height: 100px;
    padding: 0 0.5rem;
    margin-top: 1rem;
    outline: none;
    color: rgba(166, 166, 166);
    font-size: 1rem;
    border: 1px solid #040B18;
    border-radius: 8px;
}

form input.botao {
    cursor: pointer;
    width: 25%;
    margin-top: 2rem;
    border: none;
    border-radius: 32px;
    background: #8880FE;
    color: white;
    font-size: 1.3rem;
    transition: all .3s ease-in-out;
    text-align: center;
    padding: 1px;
}

form input.botao:hover {
    background: #5952d4;
}

a i {
    color: white;
    position: absolute;
    padding-left: 1rem;
    padding-top: 1.5rem;
    margin-left: -6rem;
}

section.images {
    width: 50vw;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    padding: 3rem;
}

section.images img {
    width: 87%;
    margin-right: -1.5rem;
    margin-bottom: 2rem;
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

</style>

</head>
<body>

<a href="pagina_principal.php"><i class="fa-sharp fa-solid fa-angles-left fa-xl"></i></a>

<section>
    <h2>Contato</h2>
    <form action="https://api.staticforms.xyz/submit"  method="post">
        <label class="nm">Nome</label>
        <input type="text" name="name" placeholder="Digite o seu nome" autocomplete="off" required>

        <label class="txt">E-mail</label>
        <input type="email" name="email" placeholder="Digite o seu E-mail" autocomplete="off" required>

        <label class="msg">Mensagem</label>
        <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
        <input class="botao" type="submit" name="Enviar">
        
        <input type="hidden" name="accessKey" value="c7eb727b-32ba-4ed6-b10f-f84b2af09f42">
        <input type="hidden" name="redirectTo" value="http://localhost/Tcc/ALFI-TCC/obrigado.php">

    </form>

    
</section>

<section class="images">
<img src="imagens/form3.png" alt="imgideias">
        <div class="circle"></div>
    </section>
    
</body>
</html>