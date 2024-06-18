<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes em Cartaz</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: black;
            color: white; 
            position: relative;          
        }
        .filme-title {
            font-size: 20px; /* Tamanho do título do filme */
            margin-top: 10px; /* Espaço acima do título */
            color: white; /* Cor do título */
        }
        .col {
            padding: 30px; /* separação entre as imagens dos filmes */
        }
        /* Estilizando o título "Filmes" */
        .titulo-filmes {
            font-size: 3rem; /* Tamanho grande */
            font-weight: bold; /* Negrito */            
            margin-bottom: 30px; /* Espaço abaixo do título */
            margin-top: 30px;/* Espaço acima do título */
            text-shadow: 2px 2px 4px rgba(0,0,0,0.8); /* Sombra no texto */
            letter-spacing: 4px; /* Espaçamento entre as letras */
        }

        /* Rodapé */
        .rodape {
            background-color: #333; /* Cor de fundo */
            color: white; /* Cor do texto */
            padding: 20px 0; /* Espaçamento interno */
            width: 100%; /* Largura total */
            position: absolute; /* Posição absoluta */
            bottom: -100px; /* Alinhamento na parte inferior */
            text-align: center; /* Alinhamento do texto */
        }

        /* Estilizando o texto "Cinema da Cidade" no menu */
        .texto_menu {
            display: flex; /* Usando flexbox para alinhamento */
            align-items: center; /* Alinha verticalmente */
            height: 100%; /* Altura total do pai */
            margin-left: 510px; /* centraliza o texto */
            font-size: 20px;
        }
    </style>

</head>
<body>

<!-- menu superior -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="Filmes.php">Filmes</a>        
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
                        <li><a class="dropdown-item" href="Cinemas_Cidade.php">Cinemas</a></li>                          
                        <li><a class="dropdown-item" href="formularioLogin.php">Logout</a></li>                                             
                    </ul>
                </li>
                <li class="nav-item">
                    <span class="texto_menu">Cinema da Cidade</span> 
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- fim do menu superior-->

<!-- imagem do topo -->
<img id="topo" src="https://emsergipe.com.br/hf-conteudo/uploads/posts/2024/04/2311_938650946455149ae79dd6457dc5f017.jpg" alt="" width="100%" height="500">
<!-- filmes em cartaz -->
<div class="container text-center">
    <h1 class="titulo-filmes">FILMES EM CARTAZ</h1> <!-- Título com classe estilizada -->
    <div class="row align-items-start">
        <div class="col">
            <a href="filmes/badboys/badboys_cinemas.php">
                <img src="https://br.web.img3.acsta.net/img/b0/17/b0173047cc91f385964595cc30cbb975.jpg" class="img-fluid rounded" alt="...">
                <h2 class="filme-title">Bad Boys: Até o Fim</h2> <!-- Título com classe de estilo -->
            </a>
        </div>
        <div class="col">
            <a href="filmes/planeta_macacos/planeta_dos_macacos_cinemas.php">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/planeta-dos-macacos-o-reinado/667088c0-e297-4c2e-b30b-eba3922a8cf3.webp" class="img-fluid rounded" alt="...">
                <h2 class="filme-title">Planeta dos Macacos: O Reinado</h2> <!-- Título com classe de estilo -->
            </a>
        </div>
        <div class="col">
            <a href="filmes/divertidamente/divertidamente_cinemas.php">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/divertida-mente-2/61ac248d-e3e6-4e33-9515-8ce0621a32fa.webp" class="img-fluid rounded" alt="">
                <h2 class="filme-title">Divertidamente 2</h2> <!-- Título com classe de estilo -->
            </a>
        </div>
    </div>

    <div class="row align-items-start">
        <div class="col">
            <a href="filmes/malvado_favorito/malvado_favorito_cinemas.php">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/meu-malvado-favorito-4/4d756249-3b88-4b59-baa2-527f5e3d4c3e.webp" class="img-fluid rounded" alt="...">
                <h2 class="filme-title">Meu Malvado Favorito 4</h2> <!-- Título com classe de estilo -->
            </a>
        </div>
        <div class="col">
            <a href="filmes/semente_mal/semente_do_mal_cinemas.php">
                <img src="https://maceioshopping.com/app/uploads/2024/06/semente-do-mal-poster.png" class="img-fluid rounded" alt="..." width="600px">
                <h2 class="filme-title">Semente do Mal</h2> <!-- Título com classe de estilo -->
            </a>
        </div>
        <div class="col">
            <a href="filmes/amigos_imaginarios/amigos_imaginario_cinemas.php">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/amigos-imaginarios/9ac26dbc-867c-4e6b-9347-a3e751e52dce.webp" class="img-fluid rounded" alt="">
                <h2 class="filme-title">Amigos Imaginários</h2> <!-- Título com classe de estilo -->
            </a>
        </div>
    </div>
</div>

<!-- Rodapé -->
<div class="rodape">
    <p>&copy; 2024 Filmes em Cartaz. Todos os direitos reservados</p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
