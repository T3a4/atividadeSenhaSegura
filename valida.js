function validaSenha() {
    let senha = document.getElementById("senha_usuario").value;
  
    let bot = 0;
  
    // Valida mínimo 8 caracteres
    if (senha.length >= 8) {
      document.getElementById("val1").style.color = "blue";
      bot++;
    } else {
      document.getElementById("val1").style.color = "gray";
    }
  
    // Pelo menos um número
    const regex_num = /[0-9]/;
    if (regex_num.test(senha)) {
      document.getElementById("val2").style.color = "blue";
      bot++;
    } else {
      document.getElementById("val2").style.color = "gray";
    }
  
    // Pelo menos uma letra maiúscula
    const regex_mai = /[A-Z]/;
    if (regex_mai.test(senha)) {
      document.getElementById("val3").style.color = "blue";
      bot++;
    } else {
      document.getElementById("val3").style.color = "gray";
    }
  
    // Pelo menos uma letra minúscula
    const regex_min = /[a-z]/;
    if (regex_min.test(senha)) {
      document.getElementById("val4").style.color = "blue";
      bot++;
    } else {
      document.getElementById("val4").style.color = "gray";
    }
  
    // Pelo menos um caractere especial
    const regex_car = /[!@#$%&?]/;
    if (regex_car.test(senha)) {
      document.getElementById("val5").style.color = "blue";
      bot++;
    } else {
      document.getElementById("val5").style.color = "gray";
    }
  
    // Habilita o botão se todos os requisitos forem atendidos
    if (bot === 5) {
      document.getElementById("bot_cad").disabled = false;
    } else {
      document.getElementById("bot_cad").disabled = true;
    }
  }
  