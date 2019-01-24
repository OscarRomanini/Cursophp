<?php

//Verificar se é um array

$nomes = array("Rodrigo", "Felipe", "Maria", "José");
if(is_array($nomes)):
    echo "É um array";
    echo "<br>";
else:
    echo "Não é um array";
    echo "<br>";
endif;

//Verificar se um elemento está em um array

$nomes = array("Rodrigo","Felipe","Maria");

echo in_array("Rodrigo", $nomes); //TRUE: 1 / FALSE: 0
echo "<br>";

//OU//

if(in_array("Felipe",$nomes)):
    echo "O felipe está aqui";
    echo "<br>";
else:
    echo "Não há nenhum felipe";
    echo "<br>";
endif;

// Mostrar os valores do array

$values = array_values($nomes);
print_r($values);
echo "<br>";
$carros = array("BMW","Veloster","Hilux","Fusca");
$motonetas = array("POP","JOGUE","BIZ");
echo "<br>";
//MESCLAR ARRAYS

$veiculos = array_merge($carros, $motonetas);
print_r($veiculos);
echo "<br>";

//ARRAY POP exclui a ultima posição do vetor
//ARRAY UNSHIFT add elemento no inicio do array

//SOMAR ARRAYS

$soma = array(5,6,7,8);
echo array_sum($soma);
echo "<br>";
//TRANSFORMAR STRING EM ARRAY

$data = "30/02/2019";
$novaData = explode('/', $data);
    print_r($novaData);
echo "<br>";

// O inplode transforma um array em uma string

