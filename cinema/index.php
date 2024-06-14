<?php
    require_once("conexao.php");

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    text-align: center;
}

button {
    background-color: #FFD700; /* Cor dourada para lembrar os letreiros */
    color: #000; /* Texto preto */
    border: none;
    padding: 15px 30px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    margin: 10px;
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
<div class="container">
        <button onclick="location.href='formularioLogin.php'">Logar</button>
        <button onclick="location.href='formularioCadastro.php'">Cadastrar</button>
    </div>
</body>
</html>