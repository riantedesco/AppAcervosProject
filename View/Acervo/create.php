<!DOCTYPE html>
<html>
    <head>
        <meta chasrset="utf-8">
        <title>Cadastro de Acervo</title>
    </head>

    <body>
        <form action="../../Controller/AcervoController.php" method="post" name="form_acervo">
            <input type="text" name="txtTitulo" id="txtTitulo" placeholder="Título" /><br><br>       
            <input type="text" name="txtConteudo" id="txtConteudo" placeholder="Conteúdo" /><br><br>       
            <input type="date" name="txtDataCriacao" id="txtDataCriacao" placeholder="Data de Criacão" /><br><br>       
            <input type="submit" value="Cadastrar" />      
            <input type="reset" value="Limpar" />     
        </form>
    </body>
</html>