<!DOCTYPE html>
<html>
    <head>
        <meta chasrset="utf-8">
        <title>Cadastro de Usuário</title>

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
        <form action="../../Controller/UserController.php" method="post" name="form_user">
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome" /><br><br>       
            <input type="text" name="txtSobrenome" id="txtSobrenome" placeholder="Sobrenome" /><br><br>       
            <input type="text" name="txtEmail" id="txtEmail" placeholder="E-mail" /><br><br>       
            <input type="number" name="txtIdade" id="txtIdade" placeholder="Idade" /><br><br>       
            <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha" /><br><br>       
            <input type="submit" value="Cadastrar" />      
            <input type="reset" value="Limpar" />     
        </form>
    </body>
</html>