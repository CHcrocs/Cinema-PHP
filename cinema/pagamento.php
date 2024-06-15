<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta nome="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento </title>
    <style>
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
        input[type="email"],
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
        <h2>Pagamento</h2>
        <form action="" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="quantia">Valor (R$):</label>
                <input type="number" id="quantia" name="quantia" required>

            <button type="submit">Pagar</button>
        </form>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $quantia = $_POST['quantia'];

    echo "<h2>Detalhes do Pagamento</h2>";
    echo "Email: " . $email . "<br>";
    echo "Valor: R$ " . number_format($quantia, 2, ',', '.') . "<br>";
    
    // Simulação de um processamento de pagamento bem-sucedido
    echo "<p>Pagamento processado com sucesso!</p>";
} else {
    echo "<p>Método de requisição inválido.</p>";
}
?>
