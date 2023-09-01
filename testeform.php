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
            color: white;
            font-weight: 500;
        }

        h2 {
            color: #8880FE;
            font-size: 3rem;
            text-align: center;
            margin-top: 20px;
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

        form input[type="submit"] {
            cursor: pointer;
            border: none;
            border-radius: 32px;
            background: #6C63FF;
            color: white;
            font-size: 1.1rem;
            transition: all .3s ease-in-out;
            margin: 5px;
        }

        form input[type="submit"]:hover {
            background: #5952d4;
        }

        section.images .circle {
            background: linear-gradient(45deg, #E8CBC0, #636FA4);
            clip-path: circle(40% at right 80%);
        }

        p{
            margin-top: 8px;;
        }

        a {
            color: #8880FE;
        }

        i {
            color: white;
        }

        form input:focus {
            border-color: #6C63FF !important;
            box-shadow: 0 0 0 0.25rem rgba(108, 99, 255, 0.25) !important;
        }
    </style>

</head>

<body>
<div class="container-fluid">
        <!-- <a href="index.php"><i class="fa-sharp fa-solid fa-angles-left fa-xl"></i></a>-->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
            <h2>Contato</h2>
            </div>
        </div>

        <form action="https://api.staticforms.xyz/submit" method="post">

            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 col-sm-10 col-md-10">
                    <label for="password">Nome</label>
                    <input class="form-control" type="text" id="email" name="name" placeholder="Nome" required>
                </div>
            </div>

            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 col-sm-10 col-md-10">
                    <label for="password">E-mail</label>
                    <input class="form-control" type="email" id="senha" name="email" placeholder="E-mail" required>
                </div>
            </div>

            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 col-sm-10 col-md-10">
                    <label for="password">Tua duvida</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-1 col-sm-1 col-md-1"></div>
                <input class="btn col-10 col-sm-10 col-md-10" type="submit" name="Enviar">               
                <input type="hidden" name="accessKey" value="c7eb727b-32ba-4ed6-b10f-f84b2af09f42">
                <input type="hidden" name="redirectTo" value="http://localhost/Tcc/ALFI-TCC/obrigado.php">
            </div>

        </form>
    </div>
</body>

</html>