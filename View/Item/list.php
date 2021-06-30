<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta de Itens</title>
        
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
                header ("Location:../../index.php");
        ?>

        <form action="../Item/create.php" method="post">
		<button name="incluir">Incluir</button>
		<table class="table table-hover table-condensed">
			<thead> 
		      <tr>
			      <td>Nome</td>
			      <td>Quantidade</td>
			      <td>Data de inclusão</td>
			      <td></td>	      
		      </tr>
		   </thead>

            <?php
                if (isset($_SESSION['item'])) {
                    include_once '../../Model/Item.php';

                    $item = array();
                    $item = unserialize($_SESSION['item']);

                    foreach ($item as $i) {
                        $id = $i['id'];
                        $nome = $i['nome'];
                        $quantidade = $i['quantidade'];
                        $dataInclusao = $i['dataInclusao'];
                        $acervo = $i['acervo'];
                        echo "<tr><td>$nome</td>
                                  <td>$quantidade</td>
                                  <td>$dataInclusao</td>
                                  <td><a name='excluir' href='../../Controller/ItemController.php?operation=excluir&id=$id'>Excluir</a></td></tr>";
                    } 
                }
            ?>
        </table>
        </form>
        <br>
        <?php include '../../rodape.php';?>
    </body>
</html>