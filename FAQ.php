<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <title>Perguntas Frequentes</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="imagens/logonav.png">

    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');



body {
    background: #1B2029;
    text-align: justify;
}

h2 {
    color: #8880FE;
}

.faqs-container {
  font-family: "Poppins", sans-serif;
  margin: 0 auto;
  padding: 25px;
  color: #f1faee;
  padding-top: 20px;
}

.faqs-container .questions-container {
  box-shadow: 0 4px 8px -3px rgba(0, 0, 0, 0.3);
}

.faqs-container h2 {
  padding: 4px 32px;
  font-size: 28px;
}

.faqs-container .faq-header {
  border-radius: 1px;
  display: flex;
  background: #8880FE;
  color: #f1faee;
  align-items: center;
  position: relative;
  cursor: pointer;
  padding: 15px;
  box-shadow: 0 4px 8px -3px rgba(0, 0, 0, 0.3);
  border-bottom: 1px solid #1B2029;
}

.faqs-container .faq-header .open,
.faqs-container .faq-header .close {
  position: absolute;
  right: 0;
  padding: 0 32px;
  font-size: 22px;
  font-weight: bold;
  transform: translateY(-8px);
  opacity: 0;
  transition: all 500ms;
}

.faqs-container .faq-header .open.active,
.faqs-container .faq-header .close.active {
  opacity: 1;
  transform: translateY(0);
}

.faqs-container .faq-header h3 {
  font-size: 20px;
  padding: 0 32px;
}

.faqs-container .content {
  padding: 0 32px;
  background: #d3d6d2;
  line-height: 2;
  max-height: 0;
  overflow: hidden;
  transition: all 500ms;
  color: #1B2029;
}

.faqs-container .content.active {
  max-height: 600px;
}

img {
    width: 18%;
}


.images {
    display: flex;
    justify-content: center;
}

        </style>

</head>

<body>

<div class="faqs-container">
<div class="row align-items-center">
            <div class="justify-content-center col-12  col-sm-12 col-md-12 col-lg-12">
      <h2 class="text-center">Perguntas Feitas Frequentemente</h2>

      <p> Esta é a página de Perguntas Feitas Frequentemente. Aqui estão
    esclarecidas as dúvidas mais comuns que surgem sobre o ALFI e suas funcionalidades. 
    Caso não consiga esclarecer suas dúvidas entre em contato 
    conosco para que possamos retornar uma resposta.
    </p>


      <div class="questions-container">
        <div class="content-container">
          <div class="faq-header">
            <h3>1. A que se referem as medidas do cadastro de modelos?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            Para ajudar a compreender melhor as áreas das medidas e a que elas se referem temos
    está tabela:

            </p>

            <section class="images">
                    <img src="imagens/medidastab.png" alt="TabMedidas">
               </section>

          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>2. O que é sustentabilidade?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            Sustentabilidade é a capacidade de uso consciente dos recursos naturais sem
        comprometer o bem-estar das gerações futuras. Seu objetivo principal é encontrar o equilíbrio
        entre o desenvolvimento econômico e a preservação ambiental.

            </p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>3. Qual relação a sustentabilidade tem com a indústria têxtil?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            A indústria têxtil tem um grande impacto ambiental devido ao seu alto consumo de
        água e energia, contribuindo para a escassez de recursos naturais e as mudanças climáticas.
        É crucial que as empresas adotem processos mais eficientes e fontes de energia limpa para reduzir esse
         impacto.
        Além disso, a produção de fibras sintéticas, como o poliéster, libera microplásticos durante a lavagem das
        roupas. Escolher fibras naturais e métodos de tingimento sustentáveis pode ajudar a mitigar esse problema e a
        poluição dos oceanos.
        A indústria têxtil tem o potencial de contribuir para um futuro mais sustentável. Os consumidores desempenham
        um papel importante ao escolher marcas comprometidas com a sustentabilidade e ao pressionar por mudanças
        positivas. Juntos, podemos transformar essa indústria em uma força positiva para o planeta e as pessoas, pois
        a moda consciente é o caminho para o futuro.

            </p>

          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>4. Esqueci minhas informações de cadastro/login. Como posso recupera-las?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            Para recuperar suas informações de cadastro/login, entre em contato com o suporte técnico para poder
            recuperar ou redefinir estes dados.

            </p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>5. Como entrar em contato com o suporte ao cliente?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            Você pode entrar em contato com o suporte a partir do rodapé da página principal do site, basta
            identificar a seção de "Entre em contato" e então clicar no botão de "Contato" localizado logo 
            abaixo desta seção.

            </p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>6. O ALFI está disponível internacionalmente?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            No estado de desenvolvimento atual o ALFI pode ser acessado de qualquer dispositivo a qualquer momento,
            mas as traduções estão apenas disponiveis em PT-BR.

            </p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>7. Outro...</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            Como já esclarecido no cabeçalho desta página, se sua dúvida não estiver dentre as citadas
            entre em contato com o suporte para que possamos esclarecê-la. Fique atento que o suporte irá
            entrar em contato no prazo máximo de uma semana.

            </p>
          </div>
        </div>

      </div>
    </div>

    <script>
        const faqHeaders = document.querySelectorAll(".faqs-container .faq-header");

faqHeaders.forEach((header, i) => {
  header.addEventListener("click", () => {
    header.nextElementSibling.classList.toggle("active");

    const open = header.querySelector(".open");
    const close = header.querySelector(".close");

    if (header.nextElementSibling.classList.contains("active")) {
      open.classList.remove("active");
      close.classList.add("active");
    } else {
      open.classList.add("active");
      close.classList.remove("active");
    }
  });
});
    </script>
    
    </body>
</html>