<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        
        <!-- Estilos -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <script src="main.js"></script>
        <link rel="stylesheet" href="../estilos.css">
        
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include '../cabecalho.php';?>
        <?php
            $user = unserialize($_SESSION['usuario']);
            if (!$user)
                header ("Location:../index.php")
        ?>
        
        <div class="container" style="margin-top: 1%; text-align: center;">
            <h4 style="text-align: center;"><b>HOME</b></h4><br>
            <p>Aqui temos a home da página.</p>
        </div>

        <br><br><br><br><br><br>
        <?php include '../rodape.php';?>
    </body>
</html>



   