<!DOCTYPE html>
<html>
    <head>
        <meta chasrset="utf-8">
        <title>Cadastro de Celular</title>
    </head>

    <body>
        <form action="../../Controller/LivroController.php" method="post" name="form_livro">
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome" /><br><br>       
            <input type="text" name="txtAutor" id="txtAutor" placeholder="Autor" /><br><br>       
            <input type="text" name="txtGenero" id="txtGenero" placeholder="Gênero" /><br><br>       
            <input type="text" name="txtEditora" id="txtEditora" placeholder="Editora" /><br><br>       
            <input type="number" name="txtAnoLancamento" id="txtAnoLancamento" placeholder="Ano de Lançamento" /><br><br>
            <input type="number" name="txtPreco" id="txtPreco" placeholder="Preço" /><br><br>
            <input type="submit" value="Cadastrar" />      
            <input type="reset" value="Limpar" />     
        </form>
    </body>
</html>