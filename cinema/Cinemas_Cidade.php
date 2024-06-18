<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemas Disponíveis</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #cccccc; /* Cor de fundo cinza mais escuro */
            font-family: Arial, sans-serif; /* Fonte padrão */
            margin-bottom: 60px; /* Para espaço do rodapé */
        }
        .container {
            margin-top: 50px;
        }
        .card {
            margin-bottom: 20px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #343a40; /* Cor de fundo do rodapé */
            color: #ffffff; /* Cor do texto do rodapé */
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cinemas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDarkDropdown"
                aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       opções
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">                        
                        <li><a class="dropdown-item" href="Filmes.php">Home</a></li>
                        <li><a class="dropdown-item" href="formularioLogin.php">Logout</a></li>                     
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="text-center mb-5">Cinemas Disponíveis</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title">Cine Passeio</h3>
                    <p class="card-text">Endereço: Rua Riachuelo, 410 - Centro</p>
                    <a href="https://www.cinepasseio.org/" class="btn btn-primary" target="_blank">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title">Palladium</h3>
                    <p class="card-text">Endereço: Av. Pres. Kennedy, 4121 - Portão</p>
                    <a href="https://palladiumcuritiba.com.br/?gad_source=1&gclid=Cj0KCQjwvb-zBhCmARIsAAfUI2tYrDFLkn8dXMXvBqLH36IktVpWrIvV5P21QaupjxTuAx6SDw486c0aAvVEEALw_wcB" class="btn btn-primary" target="_blank">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title">Barigui</h3>
                    <p class="card-text">Endereço: Rua Prof. Pedro Viriato Parigot de Souza, 600 - Mossunguê</p>
                    <a href="https://www.parkshoppingbarigui.com.br/cinema/" class="btn btn-primary" target="_blank">Ver detalhes</a>
                </div>
            </div>
        </div>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <span>CINEMA DA CIDADE</span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
