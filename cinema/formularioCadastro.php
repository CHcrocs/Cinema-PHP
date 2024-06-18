<?php
    require_once("conexao.php");
    if(isset($_POST['cpf']) && isset($_POST['senha']) && isset($_POST['nome'])){
        $cpf = $_POST['cpf'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $nome = $_POST['nome'];

        $sql_code = "INSERT INTO usuarios (cpf, `nome e sobrenome`, senha) VALUES ('$cpf', '$nome', '$senha')";
        if(mysqli_query($banco, $sql_code)){
            header("Location: formularioLogin.php");
        } else{
            echo "Falha ao cadastrar usuario!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('img/background.jpg') no-repeat center center;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 4%;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header h1 {
            color: #FFD700;
            font-size: 2.5em;
            margin: 0;
        }

        form {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
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
    </style>
</head>
<body>
    <header>
        <h1>Cadastro</h1>
    </header>
    <form action="" method="POST">
        <p>
            <label>CPF</label>
            <input type="number" name="cpf">
        </p>
        <p>
            <label>Nome e Sobrenome</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Confirmar cadastro</button>
        </p>
    </form>
</body>
</html>
