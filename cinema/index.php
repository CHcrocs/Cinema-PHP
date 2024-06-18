<?php
    require_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema da cidade</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('img/background.jpg') no-repeat center center;
            background-size: cover;
            flex-direction: column;
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
            font-weight: 400;
            margin: 0;
        }

        header a {
            color: rgb(137, 137, 137);
            display: inline-block;
            text-decoration: none;
            transition: .2s;
        }

        header nav.menu-desktop a:hover {
            color: rgb(255, 255, 255);
            transform: scale(1.07);
        }

        header nav ul {
            list-style: none;
        }

        header nav.menu-desktop ul li {
            display: inline-block;
            padding: 0 40px;
        }

        .container {
            text-align: center;
        }

        button {
            background-color: #FFD700; /* Cor dourada para lembrar os letreiros */
            color: #000; /* Texto preto */
            border: none;
            border-radius: 25px; /* Rounded corners */
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            margin: 10px;
            transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow */
        }

        button:hover {
            background-color: #FFA500; /* Cor laranja para efeito hover */
            transform: scale(1.1);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2); /* Enhance shadow on hover */
        }

        button:active {
            transform: scale(1.05);
        }

        button:focus {
            outline: none; /* Remove default outline */
            box-shadow: 0 0 0 4px rgba(255, 165, 0, 0.5); /* Add custom focus outline */
        }
    </style>
</head>
<body>
    <header>
        <nav class="menu-desktop">
            <h1>Cinema da cidade</h1>
        </nav><!--menu-desktop-->
    </header>

    <div class="container">
        <button onclick="location.href='formularioLogin.php'">Logar</button>
        <button onclick="location.href='formularioCadastro.php'">Cadastrar</button>
    </div>
</body>
</html>
