<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fundamentos básicos</title>
</head>

<body>

<?php

$carros = array("BMW","Veloster","Hilux","Fusca");


//Mostrar elementos

print_r($carros);

// Mostrar elemento pelo indice

echo "<br>";
echo $carros[2];

// Inserir novo elemento no array

$carros[] = "Ferrari";

echo "<br>";
print_r($carros);
echo "<br>";

//exibir quantidade de elementos

echo count($carros);

// Pegar cada valor e jogar em uma variável

foreach ($carros as $valor){
    echo $valor."<br>";
}

//Arrays associativos
$pessoa = array("nome"=> "Rodrigo", "idade" =>23, "Altura" =>1.80);
$pessoa["cidade"] = "Itabuna";

foreach ($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

//Arrays multidimensionais

$times = array(
        "cariocas" => array("Campeao" => "Vasco", "Vice" => "Flamengo", "Terceiro" => "Botafogo"),
        "paulista" => array("palmeiras", "Corinthians", "Santos"),
        "baianos" => array("Bahia", "Vitória", "Santa Cruz")
);
echo $times["Cariocas"][0];
echo "<br>";

foreach ($times["cariocas"] as $indice => $valor)
    echo $indice.":".$valor."<br>";

?>


</body>

</html>