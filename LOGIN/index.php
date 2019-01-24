<?php

//Conexão
require_once 'db_connect.php';

//iniciar sessão

session_start();

//Botão entrar
if (isset($_POST['entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erros[] = "<li>Preencha os campos</li>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php');
                else:
                    $erros[] = "<li>Usuário e senha não conferem</li>";
                    endif;


        else:
            $erros[] = "<li>Usuário inexistente</li>";
        endif;

    endif;

endif;

?>


<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
</head>

<body>

<h1>LOGIN</h1>

<?php

    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;

?>

<hr>

<form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">
    Login: <input type="text" name="login"><br>
    Senha: <input type="password" name="senha"><br>
    <button type="submit" name="entrar">ENTRAR</button>



</form>




</body>

</html>