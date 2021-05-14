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
            if (isset($_SESSION['acervos'])) {
                include_once '../../Model/Acervo.php';

                $acervos = array();
                $acervos = unserialize($_SESSION['acervos']);
                
                foreach ($acervos as $a) {
                    $id = $a['id'];
                    $titulo = $a['titulo'];
                    $conteudo = $a['conteudo'];
                    echo "<tr><td><button name='excluir' href='../../Controller/AcervoController.php?operation=deletar&id=$id'><i class='fas fa-plus'></i>Excluir</button></td> - $titulo - $conteudo<br></tr>";
                }
                unset($_SESSION['acervos']);
            }
        ?>
        
        <br><br><br><br><br><br>
        <?php include '../../rodape.php';?>
    </body>
</html>