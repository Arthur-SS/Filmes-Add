<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\nTabela filmes DELETADA\n";

$sql = "CREATE TABLE filmes(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR (200) NOT NULL,
        poster VARCHAR (200),
        sinopse TEXT,
        nota DECIMAL (2,1)
    )
";

if ($bd->exec($sql)) 
    echo "\nTabela filmes criada\n";
else 
    echo "\nERRO ao criar tabela filmes\n";

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        0,
        'Perdidos em Oz',
        'https://www.themoviedb.org/t/p/w300/bYPm31BjQed8fqbly7BFPjsOjLH.jpg',
        'Dorothy Gale, de doze anos de idade, e seu cão fiel Totó procuram por Glinda - a bondosa, na esperança de que ela possa lhes dar a magia que precisam para voltar para casa.',
        8.0
    ), (
        1,
        'Vingadores',
        'https://www.themoviedb.org/t/p/w300/u49fzmIJHkb1H4oGFTXtBGgaUS1.jpg',
        'Loki, o irmão de Thor, ganha acesso ao poder ilimitado do cubo cósmico ao roubá-lo de dentro das instalações da S.H.I.E.L.D. Nick Fury, o diretor desta agência internacional que mantém a paz.',
        7.5
    ), (
        2,
        'Toy Story',
        'https://www.themoviedb.org/t/p/w300/nPjSZmnoSdGLA2mxgccfqVQV78w.jpg',
        'Quando um reluzente ranger do espaço chamado Buzz Lightyear invade o mundo de um cowboy de corda chamado Woody, desencadeia uma hilariante briga entre brinquedos. Agora o favoritismo de Woody no coração do seu jovem dono está em perigo...',
        8.5
    )
";

if ($bd->exec($sql)) 
    echo "\nFilmes inserido com sucesso\n";
else 
    echo "\nERRO ao inserir filmes\n";

?>