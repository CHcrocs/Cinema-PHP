<?php
    require_once("conexao.php");
    
    if(!isset($_SESSION)){
        session_start();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizado</title>
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

    </style>
</head>
<body>
    <div> <img src="frame.png" alt="sucesso"></div>
</body>
</html>