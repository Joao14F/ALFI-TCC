<script>
  var select = document.getElementById("select-options");
  var formFields = document.getElementById("form-fields");
  
  select.addEventListener("change", function() {
    // Limpa os campos existentes
    formFields.innerHTML = "";
    
    // Cria novos campos com base na opção selecionada
    if (select.value === "option1") {
      var field1 = createFormField("Nome", "text");
      var field2 = createFormField("Email", "email");
      var paragraph = createParagraph("Este é um exemplo de parágrafo.");
      formFields.appendChild(field1);
      formFields.appendChild(field2);
      formFields.appendChild(paragraph);
    } else if (select.value === "option2") {
      var field1 = createFormField("Telefone", "tel");
      var field2 = createFormField("Endereço", "text");
      var field3 = createFormField("Cidade", "text");
      var field4 = createFormField("Estado", "text");
      var paragraph = createParagraph("Este é outro exemplo de parágrafo.");
      formFields.appendChild(field1);
      formFields.appendChild(field2);
      formFields.appendChild(field3);
      formFields.appendChild(field4);
      formFields.appendChild(paragraph);
    } else if (select.value === "option3") {
      var field1 = createFormField("Data de Nascimento", "date");
      var field2 = createFormField("Sexo", "radio", ["Masculino", "Feminino"]);
      var paragraph = createParagraph("E aqui temos mais um exemplo de parágrafo.");
      formFields.appendChild(field1);
      formFields.appendChild(field2);
      formFields.appendChild(paragraph);
    }
  });
  
  // Função auxiliar para criar um campo do formulário
  function createFormField(labelText, type, options) {
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
      input.name = labelText;
      input.className = "form-control";
    }
    
    var field = document.createElement("div");
    field.appendChild(label);
    field.appendChild(input);
    
    return field;
  }
  
  // Função auxiliar para criar um parágrafo
  function createParagraph(text) {
    var paragraph = document.createElement("p");
    paragraph.textContent = text;
    
    return paragraph;
  }
</script>