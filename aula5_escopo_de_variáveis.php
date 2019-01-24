<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fundamentos básicos</title>
</head>

<body>

<?php

//ESCOPO GLOBAL

$nome = "João Maria <br><hr>";

$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
    global $nome;
    echo  $nome;
}
exibeNome();

function soma(){

    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];


}

soma();

?>


</body>

</html>