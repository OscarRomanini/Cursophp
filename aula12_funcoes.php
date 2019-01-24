<?php


function exibirNome($nome){
    echo "Meu nome é $nome";
}

exibirNome("Adriele Santos");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    if ($media >= 7):
        echo "$nome foi aprovado com a média $media";
        echo "<br>";
    else:
        echo "$nome foi reprovado com a média $media";
        echo "<br>";
    endif;
}

calcularMedia("Oscar", 10, 10, 8, 6);