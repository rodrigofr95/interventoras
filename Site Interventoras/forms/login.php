// Verifique as credenciais (substitua isso com sua lógica de autenticação real)
$valid_username = "seu_usuario";
$valid_password = "sua_senha";

if ($username === $valid_username && password_verify($password, $hashed_password)) {
    // Credenciais válidas, redirecione para a página principal
    header("Location: pagina_principal.php");
    exit();
} else {
    // Credenciais inválidas, exiba uma mensagem de erro
    $error_message = "Credenciais inválidas. Tente novamente.";
}
