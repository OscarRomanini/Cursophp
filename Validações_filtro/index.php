<html>
<body>

<?php

if(isset($_POST['enviar'])):
    $erros = array();

    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = "Idade deve ser um inteiro!";
        // Se a idade não for um inteiro, vai para o array;
    endif;

    if(!empty($erros)):
        foreach ($erros as $erro):
        echo "<li> $erro </li>";

    endforeach;

    else:
        echo "Dados corretos!";

endif;
endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?> method="POST">

    IDADE: <input type="text" name="idade"><br><br>
    EMAIL: <input type="text" name="email"><br>
    PESO: <input type="text" name="peso"><br>
    IP: <input type="text" name="ip"><br>
    URL: <input type="text" name="url"><br>
    <button type="submit" name="enviar">ENVIAR</button>

</form>

</body>

</html>
