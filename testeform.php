<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="icon" type="image/png" href="imagens/logonav.png">

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
            color: white;
            font-weight: 500;
        }

        h1 {
            color: #8880FE;
            font-size: 3rem;
            text-align: center;
        }

        form input {
            background: #161923;
            outline: none;
            color: rgba(166, 166, 166);
            font-size: 1rem;
            border: 1px solid #040B18;
            border-radius: 8px;
            margin: 5px;
        }

        input[type="submit"] {
            cursor: pointer;
            border: none;
            border-radius: 32px;
            background: #6C63FF;
            color: white;
            font-size: 1.1rem;
            transition: all .3s ease-in-out;
            margin: 15px;
        }

        form input[type="submit"]:hover {
            background: #5952d4;
        }

        p{
            margin-top: 8px;;
        }
        
        form input:focus {
            border-color: #6C63FF !important;
            box-shadow: 0 0 0 0.25rem rgba(108, 99, 255, 0.25) !important;
        }

        input {
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

    input.form-control {
            background: #161923;
            outline: none;
            color: rgba(166, 166, 166);
            font-size: 1rem;
            border: 1px solid #040B18;
            border-radius: 8px;
            margin: 5px;
        }

        .form-control::placeholder {
            color: gray;
        }


        textarea.form-control {
            background: #161923;
            outline: none;
            color: rgba(166, 166, 166);
            font-size: 1rem;
            border: 1px solid #040B18;
            border-radius: 8px;
            margin: 5px;
        }

        label {
           padding: 10px 0px 10px 10px; 
        }

        
    @media (max-width: 387px) {
    h1 {
        text-align: center;
        font-size: 1.5rem;
    }

    input[type="submit"] {
        text-align: center;
    }
}

    @media (max-width: 454px) {
        h1 {
    display: flex;
    justify-content: center;
    padding-top: 3rem;
    font-size: 2rem;
    }

}

@media (max-width: 940px) {
    input[type="submit"]{
        width: 100px;
    }
}

@media (min-width: 118px) and (max-width: 767px) {
    h1 {
    display: flex;
    justify-content: center;
    padding-top: 3rem;
    }

}

@media (min-width: 768px) and (max-width: 1200px) {
    h1 {
    display: flex;
    justify-content: center;
    padding-top: 3rem;
    }

}

@media (min-width: 1201px) and (max-width: 2000px) {
    h1 {
    display: flex;
    justify-content: center;
    padding-top: 3rem;
    }

}

    </style>

</head>

<body>
<div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-10 col-md-12 col-xs-10 col-lg-12">
            <h1>Contato</h1>
            </div>
        </div>

        <form action="https://api.staticforms.xyz/submit" method="post">

            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-sm-10 col-md-6 col-xs-6 col-lg-6">
                    <label for="password">Nome</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nome" required>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-sm-10 col-md-6 col-xs-6 col-lg-6">
                    <label for="password">E-mail</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-sm-10 col-md-6 col-xs-6 col-lg-6">
                    <label class="message" for="password">Sua dúvida</label>
                    <textarea type="text" name="message" class="form-control" rows="5" placeholder="Sua dúvida" required></textarea>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12"></div>
                <input class="col-0 col-xs-12 col-sm-2 col-md-1" type="submit" name="Enviar" value="Enviar">               
                <input type="hidden" name="accessKey" value="c7eb727b-32ba-4ed6-b10f-f84b2af09f42">
                <input type="hidden" name="redirectTo" value="http://localhost/ALFI-TCC/obrigado.php">
            </div>

        </form>
    </div>
</body>

</html>