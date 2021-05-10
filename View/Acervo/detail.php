<?php
    session_start();

    /*$localhost = "localhost";
    $user = "root";
    $password = "";
    $banco = "trab_web";

    $link = mysqli_connect($localhost, $user, $password, $banco);

    $titulo = $_POST['txtTitulo'];
    $conteudo = $_POST['txtConteudo'];
    $dataCriacao = $_POST['txtDataCriacao'];

    $acervo = "INSERT INTO acervo (titulo, conteudo, dataCriacao) VALUES  ('$titulo', '$conteudo', '$dataCriacao')";
    $acervo = mysqli_query($link, $acervo);*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Acervo Efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1><br>
        <?php
            if (isset($_SESSION['acervo']) && isset($_SESSION['conteudo'])) {
                echo '<br>Acervo: '.$_SESSION['acervo'] . '<br>Conteúdo: '.$_SESSION['conteudo'];

                unset($_SESSION['acervo']);
                unset($_SESSION['conteudo']);
            }
        ?>
    </body>
</html>