<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/bootstrap.min.css">
   <title>Cadastro</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <style>
      body {
         background-color: #1B2029;
         color: #8880FE;
      }

      i {
         font-size: 2rem;
      }

      .voltar:hover {
         background-color: #8880FE;
         border-radius: 8px;
         transition: 1s;
      }

      .voltar {
         position: relative;
         display: flex;
         justify-content: left;
         align-items: center;
         height: 40px;
      }

      .voltar::after {
         content: "Voltar";
         color: white;
         border-radius: 5px;
         white-space: nowrap;
         display: none;
         justify-content: center;
      }

      .voltar:hover::after {
         display: inline-block;
      }

      .form-group {
         margin: 10px 0px;

      }

      form select:focus {
         border-color: #6C63FF !important;
         box-shadow: 0 0 0 0.25rem rgba(108, 99, 255, 0.25) !important;
      }

      form input:focus {
         border-color: #6C63FF !important;
         box-shadow: 0 0 0 0.25rem rgba(108, 99, 255, 0.25) !important;
      }

      button {
         cursor: pointer;
         width: 50%;
         margin-top: 2.5rem;
         border: none;
         border-radius: 32px;
         background: #6C63FF;
         color: white;
         font-size: 1.1rem;
         transition: all .3s ease-in-out;
         padding: 5px;
         margin-right: 10rem;
         margin-bottom: 8px;
      }

      button:hover {
         background: #5952d4;
      }
   </style>
   <script defer>
        document.addEventListener("DOMContentLoaded", function() {
            var voltarButton = document.querySelector(".voltar");
            voltarButton.addEventListener("click", function() {
                window.history.back();
            });
        });
    </script>
</head>

<body>
   <div class="container-fluid">
      <?php
      include('sessao.php');
      include_once('logado.php');
      ?>
      <div class="row align-items-center">
         <div class="col-5 col-sm-3 col-md-3 col-lg-2 voltar m-1">
            <i class="bi bi-arrow-left m-2"></i>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h1>Cadastrar Modelo</h1>
         </div>
      </div>
      <form enctype="multipart/form-data" action="enviaModelo.php" method="POST">

         <div class="row">
            <p class="col-0 col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label class="areas" for="Titulo">Insira o titulo do modelo</label>
                  <input type="name" class="form-control" id="Titulo" placeholder="Titulo" name="Título">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-0 col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label class="areas" for="Tecido">Tecido sugerido</label>
                  <input type="text" class="form-control" id="Tecido" placeholder="Tecido" name="Tecido">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-0 col-sm-0 col-md-1"></p>
            <div class="col-12 col-sm-12 col-md-10">
               <div class="form-group">
                  <label class="label">
                     É Sustentável
                  </label>
                  <br>
                  <input type="radio" value="Sim" name="Sustentável">
                  <label class="label">
                     Sim
                  </label>
                  <input type="radio" value="Não" name="Sustentável">
                  <label class="label">
                     Não
                  </label>
               </div>
               <div class="row">
                  <div class="col-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        <label for="select-options">Selecione o tipo de roupa</label>
                        <select id="select-options" class="form-select" name="Tipo">
                           <option value="option0" hidden>Selecione uma das opções</option>
                           <option value="Bermuda">Bermuda</option>
                           <option value="Blusa">Blusa</option>
                           <option value="Calça">Calça</option>
                           <option value="Camisa">Camisa</option>
                           <option value="Casaco">Casacos</option>
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
                        var field2 = createFormField("Medidas do Quadril em cm", "text", "Quadril");
                        var field3 = createFormField("Medidas da cintura em cm", "text", "Cintura");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                     } else if (select.value === "Calça") {
                        var field1 = createFormField("Medidas de cintura em cm", "text", "Cintura");
                        var field2 = createFormField("Comprimento em cm", "text", "Comprimento");
                        var field3 = createFormField("Medidas do quadril em cm", "text", "Quadril");
                        var field4 = createFormField("Altura do gancho em cm", "text", "Gancho");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                        formFields.appendChild(field4);
                     } else if (select.value === "Bermuda") {
                        var field1 = createFormField("Medidas a cintura em cm", "text", "Cintura");
                        var field2 = createFormField("Comprimento em cm", "text", "Comprimento");
                        var field3 = createFormField("Medidas do quadril em cm", "text", "Quadril");
                        var field4 = createFormField("Altura do gancho em cm", "text", "Gancho");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                        formFields.appendChild(field4);
                     } else if (select.value === "Vestido") {
                        var field1 = createFormField("Medidas da cintura em cm", "text", "Cintura");
                        var field2 = createFormField("Comprimento em cm", "text", "Comprimento");
                        var field3 = createFormField("Medidas do quadril em cm", "text", "Quadril");
                        var field4 = createFormField("Altura do gancho em cm", "text", "Gancho");
                        var field5 = createFormField("Medidas do ombro em cm", "text", "Ombro");
                        var field6 = createFormField("Medidas do busto em cm", "text", "Busto");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                        formFields.appendChild(field4);
                        formFields.appendChild(field5);
                        formFields.appendChild(field6);
                     } else if (select.value === "Casaco") {
                        var field1 = createFormField("Medidas da cintura em cm", "text", "Cintura");
                        var field2 = createFormField("Comprimento em cm", "text", "Comprimento");
                        var field3 = createFormField("Medidas do quadril em cm", "text", "Quadril");
                        var field4 = createFormField("Comprimento da manga em cm", "text", "Comprimento de manga");
                        var field5 = createFormField("Medidas do ombro em cm", "text", "Ombro");
                        var field6 = createFormField("Medidas do busto em cm", "text", "Busto");
                        var field7 = createFormField("Comprimento da cintura em cm", "text", "Cintura");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                        formFields.appendChild(field4);
                        formFields.appendChild(field5);
                        formFields.appendChild(field6);
                        formFields.appendChild(field7);
                     } else if (select.value === "Blusa") {
                        var field1 = createFormField("Medidas da cintura em cm", "text", "Cintura");
                        var field2 = createFormField("Comprimento em cm", "text", "Comprimento");
                        var field4 = createFormField("Comprimento da manga em cm", "text", "Comprimento de manga");
                        var field3 = createFormField("Medidas do quadril em cm", "text", "Quadril");
                        var field5 = createFormField("Medidas do ombro em cm", "text", "Ombro");
                        var field6 = createFormField("Medidas do busto em cm", "text", "Busto");
                        var field7 = createFormField("Medidas do punho em cm", "text", "Punho");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                        formFields.appendChild(field4);
                        formFields.appendChild(field5);
                        formFields.appendChild(field6);
                        formFields.appendChild(field7);
                     } else if (select.value === "Top") {
                        var field1 = createFormField("Comprimento da cintura em cm", "text", "Cintura");
                        var field2 = createFormField("Comprimento em cm", "text", "Comprimento");
                        var field3 = createFormField("Medidas do busto em cm", "text", "Busto");
                        var field4 = createFormField("Medidas do ombro em cm", "text", "Ombro");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                        formFields.appendChild(field4);
                     } else if (select.value === "Camisa") {
                        var field1 = createFormField("Medidas da cintura em cm", "text", "Cintura");
                        var field2 = createFormField("Comprimento em cm", "text", "Comprimento");
                        var field3 = createFormField("Medidas do quadril em cm", "text", "Quadril");
                        var field5 = createFormField("Medidas do ombro em cm", "text", "Ombro");
                        var field6 = createFormField("Medidas do busto em cm", "text", "Busto");
                        var field7 = createFormField("Comprimento da manga em cm", "text", "Comprimento de manga");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                        formFields.appendChild(field5);
                        formFields.appendChild(field6);
                        formFields.appendChild(field7);
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
               <div class="row">
                  <div class="col-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        <label for="Tipo">Insira o arquivo referente a peça concluida</label>
                        <input type="file" class="form-control" placeholder="Capa" name="Capa">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        <label for="Tipo">Insira o arquivo referente aos moldes</label>
                        <input type="file" class="form-control" placeholder="moldes" name="Moldes[]" multiple>
                     </div>
                  </div>
               </div>
               <div class="row gx-0 gy-1">
                  <p class="col-1 col-sm-3 col-md-1"></p>
                  <button type="submit" value="Enviar">Cadastrar</button>
               </div>
            </div>
      </form>
</body>

</html>