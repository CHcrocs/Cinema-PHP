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
        background: url('img/background.jpg') no-repeat center center;
        background-size: cover;

    }

    </style>
</head>
<body>
    <div> <img src="frame.png" alt="sucesso"></div>
</body>
</html>