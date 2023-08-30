<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/bootstrap.min.css">
   <title>Cadastro</title>

   <style>
      body {
         background-color: #1B2029;
         color: #8880FE;
      }

      .form-group {
         margin: 10px 0px;

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
      }

      button:hover {
         background: #5952d4;
      }
   </style>
</head>

<body>
   <form enctype="multipart/form-data" action="enviaModelo.php" method="POST">
      <div class="container-fluid">
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
                        var field1 = createFormField("Comprimento", "text", "Comprimento");
                        var field2 = createFormField("Medidas Quadril", "text", "Quadril");
                        var field3 = createFormField("Medidas cintura", "text", "Cintura");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                     } else if (select.value === "Calça") {
                        var field2 = createFormField("Comprimento", "text", "Comprimento");
                        var field3 = createFormField("Medidas quadril", "text", "Quadril");
                        var field1 = createFormField("Medidas cintura", "text", "Cintura");
                        var field4 = createFormField("Altura de gancho", "text", "Gancho");
                        formFields.appendChild(field1);
                        formFields.appendChild(field2);
                        formFields.appendChild(field3);
                        formFields.appendChild(field4);
                     } else if (select.value === "Bermuda") {
                        var field2 = createFormField("Comprimento", "text", "Comprimento");
                        var field3 = createFormField("Medidas quadril", "text", "Quadril");
                        var field1 = createFormField("Medidas cintura", "text", "Cintura");
                        var field4 = createFormField("Altura de gancho", "text", "Gancho");
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