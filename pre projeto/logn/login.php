<?php
// Conectar ao banco de dados
$host = 'localhost';  // servidor de banco de dados (localhost no caso de uso local)
$db = 'meu_banco';  // nome do banco de dados
$user = 'root';      // usuário do banco de dados
$pass = '';          // senha do banco (vazio se você não configurou)

$conn = new mysqli($host, $user, $pass, $db);

// Verificar se a conexão deu certo
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Receber os dados do formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

// Verificar se o login e a senha correspondem a um usuário no banco de dados
$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login bem-sucedido
    echo "Login realizado com sucesso! Bem-vindo, $login.";
    // Você pode redirecionar o usuário para outra página, como um painel
    // header('Location: painel.php');
} else {
    // Login ou senha incorretos
    echo "Login ou senha incorretos!";
}

// Fechar a conexão
$conn->close();
?>
