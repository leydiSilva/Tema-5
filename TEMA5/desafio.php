<?php

// Matriz de filmes e gêneros
$filmes_e_generos = array(
    array("filme" => "Interestelar", "genero" => "Ficção Científica"),
    array("filme" => "O Poderoso Chefão", "genero" => "Drama"),
    array("filme" => "Vingadores: Ultimato", "genero" => "Ação"),
    array("filme" => "Cidade de Deus", "genero" => "Drama"),
    array("filme" => "Matrix", "genero" => "Ficção Científica"),
    array("filme" => "O Senhor dos Anéis: A Sociedade do Anel", "genero" => "Fantasia"),
    array("filme" => "O Lobo de Wall Street", "genero" => "Drama"),
    array("filme" => "Batman: O Cavaleiro das Trevas", "genero" => "Ação"),
    array("filme" => "A Origem", "genero" => "Ficção Científica"),
    array("filme" => "Clube da Luta", "genero" => "Drama")
);



// Encontrar o gênero predominante
$genero_predominante = "Ficção Científica";


// Matriz apenas com o gênero predominante
$filmes_genero_predominante = array();
foreach ($filmes_e_generos as $filme) {
    if ($filme['genero'] == $genero_predominante) {
        $filmes_genero_predominante[] = $filme['filme'];
    }
}


// Exibição dos resultados
echo "<br> Lista de filmes assistidos em 2021 e seus gêneros:<br>";
foreach ($filmes_e_generos as $filme) {
    echo $filme['filme'] . " - " . $filme['genero'] . "<br>";
}



echo "<br>Filmes do gênero predominante:<br>";
foreach ($filmes_genero_predominante as $filme) {
    echo $filme . "<br>";
}

?>
