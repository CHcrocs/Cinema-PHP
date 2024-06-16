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
    </style>
</head>

<body>
    <div class="container">
        <form action="pagamento.php" method="post">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="quantia">Valor (R$):</label>
            <input type="number" id="quantia" name="quantia" required disabled>

            <button type="submit">Pagar</button>
        </form>
    </div>
</body>

</html>
<?php

require_once "conexao.php";

if(!isset($_SESSION)){
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];

    $q = "SELECT cpf FROM usuarios WHERE cpf='$cpf'";
    
    $busca = $banco->query($q);
    
    if ($busca->num_rows > 0) {
        echo "<p>Pagamento concluído com sucesso!</p>";
    } else {
        echo "<p>CPF não encontrado.</p>";
    }
    
} else {
    echo "<p>Método de requisição inválido.</p>";
}
?>