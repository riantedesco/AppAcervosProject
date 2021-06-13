<!DOCTYPE html>
<html>
    <head>
        <meta chasrset="utf-8">
        <title>Cadastro de Item</title>
    </head>

    <body>
        
        <?php
            $user = unserialize($_SESSION['usuario']);
            if (!$user)
                header ("Location:../../index.php")
        ?>
        <form action="../../Controller/AcervoController.php" method="post" name="form_acervo">
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome" /><br><br>       
            <input type="number" name="txtQuantidade" id="txtQuantidade" placeholder="Quantidade" /><br><br>       
            <input type="date" name="txtDataInclusao" id="txtDataInclusao" placeholder="Data de Inclusão" /><br><br>       
            <input type="submit" value="Cadastrar" />      
            <input type="reset" value="Limpar" />     
        </form>
    </body>
</html>