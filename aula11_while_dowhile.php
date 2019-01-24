<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 21/01/2019
 * Time: 18:16
 */


$contador = 1;


// WHILE

while ($contador <=10):
    echo "O Contador é $contador <br>";
    $contador++;
endwhile;

//DO WHILE

$contador = 1;


do{
    echo "Contador é $contador <br>";
    $contador++;

} while($contador <=10);

//FOR

for($contador = 0; $contador <=10; $contador++):
    echo  "5 x $contador =  ".($contador*5)."<br>";
endfor;

echo "<hr>";

//FOREACH

$cores = array("Verde","Vermelho","Azul");

foreach ($cores as $indice => $valor):
    echo $indice ."-". $valor . "<br>" ;
endforeach;

