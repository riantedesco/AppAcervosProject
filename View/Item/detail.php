<?php
    session_start();

    /*$localhost = "localhost";
    $user = "root";
    $password = "";
    $banco = "trab_web";

    $link = mysqli_connect($localhost, $user, $password, $banco);

    $nome = $_POST['txtNome'];
    $quantidade = $_POST['txtQuantidade'];
    $dataInclusao = $_POST['txtDataInclusao'];

    $item = "INSERT INTO item (nome, quantidade, dataInclusao) VALUES  ('$nome', '$quantidade', '$dataInclusao')";
    $item = mysqli_query($link, $item);*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Item Efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1><br>
        <?php
            if (isset($_SESSION['acervo']) && isset($_SESSION['conteudo'])) {
                echo '<br>Item: '.$_SESSION['item'];

                unset($_SESSION['item']);
            }
        ?>
    </body>
</html>