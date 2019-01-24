<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fundamentos básicos</title>
</head>

<body>

<?php

/* ***************Escalares*************** */

$nome = "Oscar";
var_dump($nome); /*Mostra os dados da Variável*/

if(is_string($nome)):
    echo "<hr><br> É uma String";
else:
    echo "Não é uma String";
endif;

$carros = array("Gol","Uno","Camaro",12,20.6,true);
var_dump($carros);

//object

class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);

if (is_object($cliente)):
    echo "É um array";
else:
    echo "Não é um array";
endif;

echo "<hr>";

?>

</body>

</html>