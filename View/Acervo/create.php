<!DOCTYPE html>
<html>
    <head>
        <meta chasrset="utf-8">
        <title>Cadastro de Acervo</title>

        <!-- Estilos -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <script src="main.js"></script>
        <link rel="stylesheet" href="../../estilos.css">
        
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include '../../cabecalho.php';?>
        
        <form action="../../Controller/AcervoController.php" method="post" name="form_acervo" style="margin-top: 1%; text-align: center;">
            <input type="text" name="txtTitulo" id="txtTitulo" placeholder="Título" style="text-align: center;"/><br><br>       
            <input type="text" name="txtConteudo" id="txtConteudo" placeholder="Conteúdo" style="text-align: center;"/><br><br>       
            <input type="date" name="txtDataCriacao" id="txtDataCriacao" placeholder="Data de Criacão" style="text-align: center;"/><br><br>       
            <input type="submit" value="Cadastrar" />      
            <input type="reset" value="Limpar" />     
        </form>

        <?php include '../../rodape.php';?>
    </body>
</html>