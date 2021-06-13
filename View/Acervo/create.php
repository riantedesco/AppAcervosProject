<?php
    session_start();
?>
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
        <?php
            $user = unserialize($_SESSION['usuario']);
            if (!$user)
                header ("Location:../../index.php")
        ?>
        <?php include '../../cabecalho.php';?>

        <form action="../../Controller/AcervoController.php?operation=cadastrar" method="post" name="form_acervo" style="margin-top: 1%; text-align: center;">
        
        <div class="panel panel-default" style="width: 300px; margin: auto;">
            <h4 style="text-align: center;"><b>CRIE UM NOVO ACERVO:</b></h4><br>
            <div class= "form-group" style="text-align: center;">
                <input required type="text" class="form-control" name="txtTitulo" id="txtTitulo" placeholder="Título"/><br>
                <input required type="text" class="form-control" name="txtConteudo" id="txtConteudo" placeholder="Conteúdo"/><br>
                <input required type="date" class="form-control" name="txtDataCriacao" id="txtDataCriacao" placeholder="Data de Criacão"/><br>    
                <input required type="submit" value="Cadastrar" />      
                <input required type="reset" value="Limpar" />  
            </div>
        </div>   
        </form>

        <?php include '../../rodape.php';?>
    </body>
</html>