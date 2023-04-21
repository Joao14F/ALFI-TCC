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
         background-color: #D9D7EF;
      }

      form {
         position: fixed;
         top: 30px;
         left: 30px;
         right: 30px;
      }

      .form-group {
         margin: 10px 0px;

      }

      button {
         margin-left: 4px;
      }
   </style>
</head>

<body>
   <form>
      <div class="container-fluid">
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputEmail1">Insira o titulo do modelo</label>
                  <input type="name" class="form-control" id="Nome" placeholder="Titulo">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="checkbox">Sustentavel</label>
                  <input type="checkbox" id="checkbox">
               </div>
            </div>
         </div>
         <div class="row">

            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="select-options">Selecione o tipo de roupa</label>
                  <select id="select-options" class="form-select">
                     <option value="option0">Selecione uma das opções</option>
                     <option value="option1">Saia</option>
                     <option value="option2">Calça</option>
                     <option value="option3">Bermuda</option>
                  </select>

                  <div id="form-fields"></div>
               </div>
            </div>
         </div>
         <script>
  var select = document.getElementById("select-options");
  var formFields = document.getElementById("form-fields");
  
  select.addEventListener("change", function() {
    // Limpa os campos existentes
    formFields.innerHTML = "";
    
    // Cria novos campos com base na opção selecionada
    if (select.value === "option1") {
    var field1 = createFormField("Comprimento", "text", "form-control");
    var field2 = createFormField("Medidas quadril", "text", "form-control");
    var field3 = createFormField("Medidas cintura", "text", "form-control");
    formFields.appendChild(field1);
    formFields.appendChild(field2);
    formFields.appendChild(field3);

 } else if (select.value === "option2") {
    var field1 = createFormField("Cintura", "text", "form-control");
    var field2 = createFormField("Comprimento", "text", "form-control");
    var field3 = createFormField("Quadril", "text", "form-control");
    var field4 = createFormField("Altura de gancho", "text", "form-control");
    formFields.appendChild(field1);
    formFields.appendChild(field2);
    formFields.appendChild(field3);
    formFields.appendChild(field4);

 } else if (select.value === "option3") {
    var field1 = createFormField("Cintura", "text", "form-control");
    var field2 = createFormField("Comprimento", "text", "form-control");
    var field3 = createFormField("Quadril", "text", "form-control");
    var field4 = createFormField("Altura de gancho", "text", "form-control");
    formFields.appendChild(field1);
    formFields.appendChild(field2);
    formFields.appendChild(field3);
    formFields.appendChild(field4);
 }
});
  
  // Função auxiliar para criar um campo do formulário
  function createFormField(labelText, type, className, options) {
    var label = document.createElement("label");
    label.textContent = labelText;
    
    var input;
    if (type === "radio") {
      input = document.createElement("div");
      input.className = "form-check";
      for (var i = 0; i < options.length; i++) {
        var option = document.createElement("input");
        option.type = "radio";
        option.name = labelText;
        option.value = options[i];
        option.className = className;
        var optionLabel = document.createElement("label");
        optionLabel.textContent = options[i];
        optionLabel.className = "form-check-label";
        input.appendChild(option);
        input.appendChild(optionLabel);
      }
    } else {
      input = document.createElement("input");
      input.type = type;
      input.name = labelText;
      input.className = className;
    }
    
    var field = document.createElement("div");
    field.appendChild(label);
    field.appendChild(input);
    
    return field;
  }
</script>

         <!--<div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputEmail1">Medidas comprimento</label>
                  <input type="text", "form-control" class="form-control" id="Descrição" placeholder="Descrição">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputEmail1">Medidas quadril</label>
                  <input type="text", "form-control" class="form-control" id="Descrição" placeholder="Descrição">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputEmail1">Medidas cintura</label>
                  <input type="text", "form-control" class="form-control" id="Descrição" placeholder="Descrição">
               </div>
            </div>
         </div>-->
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="Tipo">Insira o arquivo</label>
                  <input type="file" class="form-control" id="Email1" placeholder="E-mail">
               </div>
            </div>
         </div>
         <div class="row gx-0 gy-1">
            <p class="col-1 col-sm-3 col-md-1"></p>
            <button type="submit" class="col-sm-6 col-md-1 btn btn-primary">Cadastrar</button>
         </div>
      </div>
   </form>
</body>

</html>