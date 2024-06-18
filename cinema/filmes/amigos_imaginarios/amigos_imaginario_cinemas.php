<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemas e Sessões</title>
    <style>
        body {
            background-color: #8c8c8c;
            font-family: Arial, sans-serif;       
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        h3 {
            color: #ddd9ce;
            margin: 10px 0;
        }
        .opcoes {
            border-radius: 10px;
            background-color: #3e3e3e;
            padding: 20px;
            max-width: 600px;
            width: 90%;
       
        }
        hr {
            border: none;
            height: 1px;
            background-color: #ddd9ce;
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        td {
            border-radius: 2px;
            padding: 10px;
            background-color: #eead4d;
            text-align: center;
            font-weight: bold;
            color: #3e3e3e;    
        }
        .hora {
            background-color: #3e3e3e;
            border: solid blue 1px;
            color: #fff;
        }
        .hora a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 0;
        }
        .hora a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Cinemas disponíveis e sessões</h1>

    <div class="opcoes">
        <h3>Cine Passeio</h3>
        <hr>
        <table>
            <tr class="tipo">
                <td>Normal</td>
                <td>Dublado</td>
            </tr>
        </table>

        <table>
            <tr>
                <td class="hora"><a href="../../salas\cine_passeio\hrs_14_amigos.php">14:20</a></td>
                <td class="hora"><a href="../../salas\Barigui\hrs_17_amigos.php">17:00</a></td>
            </tr>
        </table>

        <h3>Palladium</h3>
        <hr>
        <table>
            <tr>
                <td>3D</td>
                <td>Legendado</td>
            </tr>
        </table>

        <table>
            <tr>
                <td class="hora"><a href="../../salas\palladium\hrs_18_amigos.php">18:00</a></td>
                <td class="hora"><a href="../../salas\palladium\hrs_13_amigos.php">13:10</a></td>
            </tr>
        </table>

        <h3>Barigui</h3>
        <hr>
        <table>
            <tr>
                <td>Normal</td>
                <td>Dublado</td>
            </tr>
        </table>

        <table>
            <tr>
                <td class="hora"><a href="../../salas\Barigui\hrs_17_amigos.php">17:00</a></td>
                <td class="hora"><a href="../../salas\Barigui\hrs_19_amigos.php">19:00</a></td>
            </tr>
        </table>

    </div>

</body>
</html>
