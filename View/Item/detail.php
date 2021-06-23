<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Item Efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1><br>
        <?php
            if (isset($_SESSION['nome'])) {
                echo '<br>Item: '.$_SESSION['nome'];

                unset($_SESSION['nome']);
            }
        ?>
    </body>
</html>