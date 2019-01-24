<?php

//HEADER
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Clientes</h3>
        <table class="striped">
        <thead>
            <tr>
                <th>Nome: </th>
                <th>Sobrenome: </th>
                <th>Email: </th>
                <th>Idade: </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Rodrigo</td>
                <td>Oliveira</td>
                <td>rodrigo@gmail.com</td>
                <td>25</td>
                <td><a href="" class="btn-floating-orange"><i class="material-icons">edit</i> </a></a></td>
                <td><a href="" class="btn-floating-orange"><i class="material-icons">delete</i></a></td>

            </tr>
        </tbody>
        </table>
        <br>
        <a href="" class="btn">Adicionar cliente</a>

    </div>
</div>




<?php
include_once 'includes/footer.php';

?>
