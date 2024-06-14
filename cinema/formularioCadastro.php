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


</style>
<body>
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