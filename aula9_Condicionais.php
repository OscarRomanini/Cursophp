<?php
/**
 * Created by PhpStorm.
 * User: Crmall
 * Date: 21/01/2019
 * Time: 17:27
 */

$numero = 10;

if ($numero == 10):
    echo "É 10";
else:
    echo "Não é 10";
endif;

// OPERADOR TERNÁRIO

$media = 7;

echo ($media >= 7) ? "Aprovado" : "Reprovado";

//SWICH

$cor = "vermelho";

switch ($cor):
    case "vermelho":
        echo "A cor é vermelho";
        break;

    case "verde":
        echo "A cor é verde";
        break;

    case "azul":
        echo "A cor é azul";
    break;

    default:
        echo "Sua cor preferida não é vermelho, verde ou azul";

    endswitch;
