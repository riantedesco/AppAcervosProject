<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Livro Efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1><br>
        <?php
            if (isset($_SESSION['livro']) && isset($_SESSION['autor'])) {
                echo '<br>Livro: '.$_SESSION['livro'] . '<br>Autor: '.$_SESSION['autor'];
            
                unset($_SESSION['livro']);
                unset($_SESSION['autor']);
            }
        ?>
    </body>
</html>