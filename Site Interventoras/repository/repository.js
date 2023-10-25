// Criar um objeto para armazenar login e senha
const loginRepository = {
    users: [
      { login: "usuario1", senha: "senha12345" },
      { login: "usuario2", senha: "12345" },
      // Adicione mais usuários conforme necessário
    ],
  
    // Função para verificar se o login e a senha são válidos
    validateLogin: function(username, senha) {
      const user = this.users.find(user => user.userlogin === userlogin && user.senha === senha);
      return user !== undefined;
    }
  };
  
  // Exemplo de uso:
  const login = "usuario1";
  const senha = "123";
  
  if (loginRepository.validateLogin(login, senha)) {
    console.log("Login bem-sucedido!");
  } else {
    console.log("Login falhou. Verifique seu nome de usuário e senha.");
  }
  