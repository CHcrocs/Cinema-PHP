<?php
require_once("conexao.php");

if (!isset($_SESSION)) {
    session_start();
}

$message = "";

if (isset($_POST['cpf']) && isset($_POST['senha'])) {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    // Usar prepared statements para evitar SQL Injection
    $stmt = $banco->prepare("SELECT * FROM usuarios WHERE cpf = ?");
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $obj = $result->fetch_object();

        // Verificar a senha usando password_verify
        if (password_verify($senha, $obj->senha)) {
            $_SESSION['cpf'] = $obj->cpf;
            $_SESSION['nome'] = $obj->nome;
            $_SESSION['senha'] = $obj->senha;

            header("Location: painel.php");
            exit();
        } else {
            $message = "CPF ou senha incorretos!";
        }
    } else {
        $message = "Usuário não encontrado!";
    }

    $stmt->close();
} else {
    $message = "Por favor, preencha todos os campos.";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de login</title>
</head>
<style>
   body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url('https://static.vecteezy.com/ti/vetor-gratis/p1/5489177-cena-de-cinema-ou-teatro-com-uma-cortina-gratis-vetor.jpg') no-repeat center center;
    background-size: cover;
    font-family: Arial, sans-serif;
    color: #fff;
}



.container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

form {
    background-color: rgba(0, 0, 0, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 300px;
    text-align: center;
    margin-top: 15px; /* Espaçamento adicional para a mensagem */
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"], input[type="number"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    background-color: #FFD700; /* Cor dourada */
    color: #000; /* Texto preto */
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    transition: transform 0.3s, background-color 0.3s;
}

button:hover {
    background-color: #FFA500; /* Cor laranja para efeito hover */
    transform: scale(1.1);
}

button:active {
    transform: scale(1.05);
}

.message {
    background-color: rgba(255, 215, 0, 0.8); /* Fundo dourado semi-transparente */
    color: #000; /* Texto preto */
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    margin-bottom: 15px;
    font-weight: bold;
    text-align: center;
    width: 300px; /* Alinhar com a largura do formulário */
}


</style>
<body>
<div class="container">
        <?php if (!empty($message)): ?>
            <div class="message"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <form action="" method="POST">
            <p>
                <label>CPF</label>
                <input type="number" name="cpf">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>
            <p>
                <button type="submit">Entrar</button>
            </p>
            <p>
                <button type="button" onclick="location.href='formularioCadastro.php'">Criar Conta</button>
            </p>
        </form>
    </div>
</body>
</html>