<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/bootstrap.min.css">
   <title>Cadastro</title>

   <link rel="icon" type="image/png" href="imagens/logonav.png">

   <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

* {
    font-family: "Poppins", sans-serif;
}

body {
    background: #1B2029;
    color: white;
    font-weight: 400;
   
}

      .form-group {
         margin: 10px 0px;

      }

        input[type="submit"] {
         cursor: pointer;
         width: 20%;
         margin-top: 1rem;
         border: none;
         border-radius: 32px;
         background: #6C63FF;
         color: white;
         font-size: 1.1rem;
         transition: all .3s ease-in-out;
         padding: 5px;
         margin-bottom: 15px;
      }

      input[type="submit"]:hover {
            background: #5952d4;
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

        label {
           color: white; 
           padding: 0px 0px 0px 10px; 
        
        }

        input[type="radio"] {
         width: 2.5%;
         margin-left: 10px;
        }

        label.lab {
         padding-left: 15px;
        }

        .areass {
         padding-top: 1.2rem;

        }

        @media (max-width: 387px) {

    input[type="submit"] {
        text-align: center;
    }
}


@media (max-width: 610px) {
    input[type="submit"]{
        width: 130px;
    }

    body {
      padding-left: 15px;
      padding-right: 15px;   
    }
}


@media (min-width: 1201px) and (max-width: 2000px) {
   input[type="submit"]{
   text-align: center;
  }

  input.form-control {
   display: flex;
   justify-content: center;
  }
}


   </style>
</head>

<body>
<?php 
include('sessao.php'); 
include_once('logado.php'); 
?>
   <form enctype="multipart/form-data" action="enviaModelo.php" method="POST">
      <div class="container">
         <div class="row justify-content-center align-items-center">
            <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-8 ">
               <div class="form-group">
                  <label class="areass" for="Titulo">Insira o titulo do modelo</label>
                  <input type="name" class="form-control" id="Titulo" placeholder="Titulo" name="Título">
               </div>
            </div>
         </div>
         <div class="row justify-content-center align-items-center">
            <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-8 ">
               <div class="form-group">
                  <label class="areas" for="Tecido">Tecido sugerido</label>
                  <input type="text" class="form-control" id="Tecido" placeholder="Tecido" name="Tecido">
               </div>
            </div>
         </div>
         <div class="row justify-content-center align-items-center">
            <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-8 ">
               <div class="form-group">
                  <label class="label">
                     É Sustentável ?
                  </label>
                  <br>
                  <input type="radio" value="Sim" name="Sustentável">
                  <label class="lab">
                     Sim
                  </label>
                  <input type="radio" value="Não" name="Sustentável">
                  <label class="lab">
                     Não
                  </label>
               </div>
               <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                     <div class="form-group">
                        <label for="select-options">Selecione o tipo de roupa</label>
                        <select id="select-options" class="form-select" name="Tipo">
                           <option value="option0">Selecione uma das opções</option>
                           <option value="Bermuda">Bermuda</option>
                           <option value="Blusa">Blusa</option>
                           <option value="Calça">Calça</option>
                           <option value="Camisa">Camisa</option>
                           <option value="Casacos">Casacos</option>
                           <option value="Saia">Saia</option>                                             
                           <option value="Top">Top</option>
                           <option value="Vestido">Vestido</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div id="form-fields" class="row"></div>
               <script>
                  var select = document.getElementById("select-options");
                  var formFields = document.getElementById("form-fields");

                  select.addEventListener("change", function() {
                     // Limpa os campos existentes
                     formFields.innerHTML = "";

                     // Cria novos campos com base na opção selecionada
                     if (select.value === "Saia") {
                        var field1 = createFormField("Comprimento em cm", "text", "Comprimento");
                        var field2 = createFormField("Medidas Quadril em cm", "text", "Quadril");
                        var field3 = createFormField("Medidas cintura em cm", "text", "Cintura");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                     } else if (select.value === "Calça") {
                        var field2 = createFormField("Comprimento em cm", "text", "Comprimento");
                        var field3 = createFormField("Medidas quadril em cm", "text", "Quadril");
                        var field1 = createFormField("Medidas cintura em cm", "text", "Cintura");
                        var field4 = createFormField("Altura de gancho em cm", "text", "Gancho");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                        formFields.appendChild(field4);
                     } else if (select.value === "Bermuda") {
                        var field2 = createFormField("Comprimento em cm", "text", "Comprimento");
                        var field3 = createFormField("Medidas quadril em cm", "text", "Quadril");
                        var field1 = createFormField("Medidas cintura em cm", "text", "Cintura");
                        var field4 = createFormField("Altura de gancho em cm", "text", "Gancho");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                        formFields.appendChild(field4);
                     }
                  });

                  // Função auxiliar para criar um campo do formulário
                  function createFormField(labelText, type, name, options) {
                     var label = document.createElement("label");
                     label.textContent = labelText;

                     var input;
                     if (type === "radio") {
                        input = document.createElement("div");
                        input.className = "form-check";
                        for (var i = 0; i < options.length; i++) {
                           var option = document.createElement("input");
                           option.type = "radio";
                           option.name = name;
                           option.value = options[i];
                           option.className = "form-check-input";
                           var optionLabel = document.createElement("label");
                           optionLabel.textContent = options[i];
                           optionLabel.className = "form-check-label";
                           input.appendChild(option);
                           input.appendChild(optionLabel);
                        }
                     } else {
                        input = document.createElement("input");
                        input.type = type;
                        input.name = name;
                        input.className = "form-control";
                     }

                     var field = document.createElement("div");
                     field.appendChild(label);
                     field.appendChild(input);

                     return field;
                  }
               </script>
               <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="form-group">
                        <label for="Tipo">Insira o arquivo referente a peça concluída</label>
                        <input type="file" class="form-control" placeholder="Capa" name="Capa">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-xs-10 col-sm-12 col-md-12 col-lg-12">
                     <div class="form-group">
                        <label for="Tipo">Insira o arquivo referente aos moldes</label>
                        <input type="file" class="form-control" placeholder="moldes" name="Moldes[]" multiple>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center align-items-center">
               <div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12"></div>
                  <input class=" justify-xs-center" type="submit" name="submit" value="Cadastrar">
               </div>
            </div>
   </form>
</body>

</html>