<?php

    $banco = new mysqli("localhost" , "root" , "" , "cinema_db");
    if ($banco->error) {
        die("Falha ao conectar ao banco de dados: " . $banco->error);
    }

?>