<?php

//HEADER
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <!--Adicionar um novo cliente-->
        <h3 class="light"> Novo Cliente</h3>

        <form action="PHP_action/create.php" method="post">
        <!--Nome-->
        <div class="input-field col s12">
            <input type="text" name="nome" id="nome">
            <label for="nome">Nome</label>
        </div>
         <!--Sobrenome-->
        <div class="input-field col s12">
            <input type="text" name="sobrenome" id="sobrenome">
            <label for="sobrenome">Sobrenome</label>
        </div>
        <!--Email-->
        <div class="input-field col s12">
            <input type="text" name="email" id="email">
            <label for="email">Email</label>
        </div>
        <!--idade-->
        <div class="input-field col s12">
            <input type="number" name="idade" id="idade">
            <label for="idade">Idade</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
        <button type="submit" class="btn green"> Lista de clientes </button>

        </form>

    </div>
</div>




<?php
include_once 'includes/footer.php';

?>
