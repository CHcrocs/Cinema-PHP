<?php
require_once "../../conexao.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['assentosSelecionados'])) {
        $_SESSION['assentos_selecionados'] = json_encode($_POST['assentosSelecionados']);
        $assentos_selecionados = $_SESSION['assentos_selecionados'];
        $cpf = $_SESSION['cpf'];
        $query = "UPDATE usuarios SET assentos = '$assentos_selecionados' WHERE cpf = '$cpf'";
        $resultado = $banco->query($query);

        if ($debug) {
            echo "Query: $query";
            echo var_dump($resultado);
        }
        header('Location: ../../pagamento.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha de Assentos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #a9a9a9;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #333333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        td {
            height: 90px;
            padding: 0px;
            text-align: center;
            position: relative;
            border-radius: 100%;
            background-color: #6699ff;
            cursor: pointer;
        }
        td:hover {
            background-color: #90ee90;
        }
        .indisponivel {
            background-color: #aaaaaa;
            cursor: not-allowed;
        }
        .indisponivel:hover {
            background-color: #ab2e46;
            cursor: not-allowed;
        }
        .selected {
            background-color: green !important;
        }
        .confirm-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .confirm-button:hover {
            background-color: #45a049;
        }
        #tela {
            background-color: black;
            color: white;
        }
        .cabecalho{
            background-color: #333333;
        }
    </style>
</head>
<body>
<h1 class="cabecalho">selecione seu assento</h1>
    <div class="container">
        
        <h1 id="tela">TELA</h1>
        <form id="seatForm" method="post">
            <table>
                <tr>
                    <td class="disponivel" id="a1">A1</td>
                    <td class="disponivel" id="a2">A2</td>
                    <td class="indisponivel" id="a3">A3</td>
                    <td class="disponivel" id="a4">A4</td>
                    <td class="disponivel" id="a5">A5</td>
                    <td class="disponivel" id="a6">A6</td>
                </tr>
                <tr>
                    <td class="indisponivel" id="b1">B1</td>
                    <td class="indisponivel" id="b2">B2</td>
                    <td class="indisponivel" id="b3">B3</td>
                    <td class="indisponivel" id="b4">B4</td>
                    <td class="disponivel" id="b5">B5</td>
                    <td class="disponivel" id="b6">B6</td>
                </tr>
                <tr>
                    <td class="disponivel" id="c1">C1</td>
                    <td class="disponivel" id="c2">C2</td>
                    <td class="disponivel" id="c3">C3</td>
                    <td class="disponivel" id="c4">C4</td>
                    <td class="disponivel" id="c5">C5</td>
                    <td class="disponivel" id="c6">C6</td>
                </tr>
                <tr>
                    <td class="disponivel" id="d1">D1</td>
                    <td class="disponivel" id="d2">D2</td>
                    <td class="disponivel" id="d3">D3</td>
                    <td class="disponivel" id="d4">D4</td>
                    <td class="disponivel" id="d5">D5</td>
                    <td class="disponivel" id="d6">D6</td>
                </tr>
            </table>
            <button type="submit" class="confirm-button">Confirmar Seleção</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const seats = document.querySelectorAll('.disponivel');
            seats.forEach(seat => {
                seat.addEventListener('click', () => {
                    seat.classList.toggle('selected');
                });
            });

            document.getElementById('seatForm').addEventListener('submit', function(event) {
                event.preventDefault();

                const selectedSeats = [];
                document.querySelectorAll('.selected').forEach(seat => {
                    selectedSeats.push(seat.id);
                });

                selectedSeats.forEach(seat => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'assentosSelecionados[]';
                    input.value = seat;
                    this.appendChild(input);
                });

                this.submit();
            });
        });
    </script>
</body>
</html>
