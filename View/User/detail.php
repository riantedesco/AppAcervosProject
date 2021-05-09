<?php
    session_start();

    /*$localhost = "localhost";
    $user = "root";
    $password = "";
    $banco = "trab_web";

    $link = mysqli_connect($localhost, $user, $password, $banco);

    $nome = $_POST['txtNome'];
    $sobrenome = $_POST['txtSobrenome'];
    $idade = $_POST['txtIdade'];
    $email = $_POST['txtEmail'];
    $senha = $_POST['txtSenha'];

    $cadastro = "INSERT INTO usuario (nome, sobrenome, idade, email, senha) VALUES  ('$nome', '$sobrenome', '$idade', '$email', '$senha')";
    $cadastro = mysqli_query($link, $cadastro);*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Usuário Efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1><br>
        <?php
            if (isset($_SESSION['user']) && isset($_SESSION['mail'])) {
                echo '<br>Usuário: '.$_SESSION['user'] . '<br>E-mail: '.$_SESSION['mail'];

                unset($_SESSION['user']);
                unset($_SESSION['mail']);
            }
        ?>
    </body>
</html>