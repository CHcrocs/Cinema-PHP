<?php

require_once "conexao.php";

if (!isset($_SESSION)) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];

    $q = "SELECT cpf FROM usuarios WHERE cpf='$cpf'";

    $busca = $banco->query($q);

    if ($busca->num_rows > 0) {
        header('Location: painel.php');
    } else {
        $message = "CPF incorreto!";
    }
} else {
    // echo "<p>Método de requisição inválido.</p>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta nome="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://img.freepik.com/vetores-gratis/assentos-de-cinema-vermelho-com-fundo-de-cortinas_1017-38388.jpg?size=626&ext=jpg&ga=GA1.1.2082370165.1716681600&semt=ais_user') no-repeat center center;
            background-size: cover;

        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="text"],
        input[type="number"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            background-color: rgba(255, 215, 0, 0.8);
            /* Fundo dourado semi-transparente */
            color: #000;
            /* Texto preto */
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 15px;
            font-weight: bold;
            text-align: center;
            width: 300px;
            /* Alinhar com a largura do formulário */
        }
    </style>
</head>

<body>
    <div class="container">
        <?php if (!empty($message)) : ?>
            <div class="message"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <form action="pagamento.php" method="post">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="quantia">Valor (R$):</label>
            <input type="number" id="quantia" name="quantia" required disabled placeholder="12,99">

            <button type="submit">Pagar</button>
        </form>
    </div>
</body>

</html>