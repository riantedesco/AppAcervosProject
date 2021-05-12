<!DOCTYPE html>
<html>
    <head>
        <meta chasrset="utf-8">
        <title>Cadastro de Acervo</title>

        <!-- Estilos -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <script src="main.js"></script>
        <link rel="stylesheet" href="estilos.css">
        
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </head>

    <body>
    <div>
        <div class="display-1 d-md-block font-weight-bolder " style= "height: 80%; color:rgb(0, 0, 0); text-shadow: 3px 3px rgb(255, 255, 255); text-align: center;">
            <p>FreeLib</p>
            <h1>ACERVO DE MULTIMÍDIA ONLINE</h1>
        </div>
    </div>
    
    <nav id="main-nav">
        <ul class="icon-bar" >
            <li><a href="#" class="fa fa-home"> Home</a></li>
            <li><a href="#" class="fa fa-book"> Livros</a></li>
            <li><a href="#" class="fa fa-film"> Filmes</a></li>
            <li><a href="#" class="fa fa-home"> CDs</a></li>
        </ul>
    </nav>
        <form action="../../Controller/AcervoController.php" method="post" name="form_acervo">
            <input type="text" name="txtTitulo" id="txtTitulo" placeholder="Título" /><br><br>       
            <input type="text" name="txtConteudo" id="txtConteudo" placeholder="Conteúdo" /><br><br>       
            <input type="date" name="txtDataCriacao" id="txtDataCriacao" placeholder="Data de Criacão" /><br><br>       
            <input type="submit" value="Cadastrar" />      
            <input type="reset" value="Limpar" />     
        </form>
    </body>
</html>