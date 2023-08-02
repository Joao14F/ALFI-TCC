<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testeform</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        * {
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #1B2029;
        }

        section {
            justify-content: center;
        }

        section h2 {
            color: #8880FE;
            font-size: 40px;
            text-align: center;
        }

        form label {
            color: white;
            font-size: 17px;
        }

        form input {
            background: #161923;
            outline: none;
            color: rgba(166, 166, 166);
            font-size: 1rem;
            border: 1px solid #040B18;
            border-radius: 8px;
        }

        form textarea {
            background: #161923;
            outline: none;
            color: rgba(166, 166, 166);
            font-size: 1rem;
            border: 1px solid #040B18;
            border-radius: 8px;
        }

        form input.botao {
            cursor: pointer;
            border: none;
            border-radius: 32px;
            background: #8880FE;
            color: white;
            font-size: 1.3rem;
            transition: all .3s ease-in-out;
            text-align: center;
        }

        form input.botao:hover {
            background: #5952d4;
        }

        a i {
            color: white;
        }
    </style>

</head>

<body>
    <div class="container-fluid">

    
    <a href="pagina_principal.php"><i class="fa-sharp fa-solid fa-angles-left fa-xl"></i></a>

    <section>
        <h2>Contato</h2>
        <form action="https://api.staticforms.xyz/submit" method="post">
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
    </div>
</body>

</html>