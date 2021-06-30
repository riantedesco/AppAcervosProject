<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta de Acervos</title>
        
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

        <?php
            $usuario = unserialize($_SESSION['usuario']);
            if (!$usuario)
                header ("Location:../../index.php")
        ?>
        
        <i><h3 style="text-align: center;"><?php echo $usuario[0]['nome'], ", estes são seus acervos:" ?></h3></i><br>

        <?php
            if (isset($_SESSION['acervo'])) {
                include_once '../../Model/Acervo.php';

                $acervo = array();
                $acervo = unserialize($_SESSION['acervo']);
                
                foreach ($acervo as $a) {
                    $id = $a['id'];
                    $titulo = $a['titulo'];
                    $conteudo = $a['conteudo'];
                    $usuario = $a['usuario']; 
                     ?>
                    <div class= "form-group" style="text-align: center;">
                    <?php
                    echo "<h1><b>$titulo</b></h1> <b><h5>$conteudo</h5></b>
                          <td><a name='excluir' href='../../Controller/AcervoController.php?operation=excluir&id=$id'>Excluir</a></td> -- 
                          <td><a name='consultar' href='../../Controller/ItemController.php?operation=consultar&id=$id'>Ver Itens</a></td>
                          <br><br><br>";
                        
                    ?>                    
                    </div>
                    <?php
                } 
            }
        ?>
        <?php include '../../rodape.php';?>
    </body>
</html>