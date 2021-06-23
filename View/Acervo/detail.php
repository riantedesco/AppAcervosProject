<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Acervo Efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1><br>
        <?php
            if (isset($_SESSION['titulo']) && isset($_SESSION['conteudo'])) {
                echo '<br>Acervo: '.$_SESSION['titulo'] . '<br>Conteúdo: '.$_SESSION['conteudo'];

                unset($_SESSION['titulo']);
                unset($_SESSION['conteudo']);
            }
        ?>
    </body>
</html>