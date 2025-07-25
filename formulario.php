<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Usuário</title>
  <style>
    span {
      display: block;
      margin: 4px 0;
      color: gray;
    }
  </style>
</head>
<body>

  <h2>Cadastro de Usuário</h2>
  <form>
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Contato:</label>
    <input type="text" name="contato" required><br><br>

    <label>E-mail:</label>
    <input type="email" name="email" required><br><br>

    <label>Senha:</label>
    <input type="password" id="senha_usuario" name="senha_usuario" onkeyup="validaSenha()" required><br><br>

    <div>
      <p>A senha deve conter:</p>
      <span id="val1">• 8 caracteres</span>
      <span id="val2">• Pelo menos um número</span>
      <span id="val3">• Pelo menos uma letra maiúscula</span>
      <span id="val4">• Pelo menos uma letra minúscula</span>
      <span id="val5">• Pelo menos um caractere especial (!@#$%&?)</span>
    </div>

    <br>
    <button type="submit" id="bot_cad" disabled>Cadastrar</button>
  </form>

  <!-- Vincula o script JS -->
  <script type="text/javascript" src="valida.js"></script>
</body>
</html>
