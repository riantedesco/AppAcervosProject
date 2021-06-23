<!DOCTYPE html>
<html>
    <head>
        <meta chasrset="utf-8">
        <title>Cadastro de Item</title>

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
        <?php/*
            $usuario = unserialize($_SESSION['usuario']);
            if (!$usuario)
                header ("Location:../../index.php")
        */?>
        <?php include '../../cabecalho.php';?>

        <form action="create.php" method="post" name="form_item" style="margin-top: 1%; text-align: center;">

        <div class="panel panel-default" style="width: 300px; margin: auto;">
            <h4 style="text-align: center;"><b>CRIE UM NOVO ITEM:</b></h4><br>
            <div class= "form-group" style="text-align: center;">
                <input required type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome" /><br>
                <input required type="number" class="form-control" name="txtQuantidade" id="txtQuantidade" placeholder="Quantidade" /><br>  
                <input required type="date" class="form-control" name="txtDataInclusao" id="txtDataInclusao" placeholder="Data de Inclusão" /><br>     
                <input type="submit" value="Cadastrar" />      
                <input type="reset" value="Limpar" />   
            </div>
        </div>   
        </form>

        <?php include '../../rodape.php';?>
    </body>
</html>