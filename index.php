<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Index</title>
    <meta charset="utf-8">
    
    <!-- Estilos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="main.js"></script>
    
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- CSS -->
    <style>
        body {
            margin: 0;
        }

        .icon-bar {
            width: 100%;
            background-color: rgb(189, 189, 194);
            overflow: auto;
        }

        li {
            list-style-type: none;
        }

        .icon-bar a {
            float: left;
            width: 25%;
            text-align: center;
            padding: 15px;
            transition: all 0.3s ease;
            color: rgb(0, 0, 0);
            font-size: 24px;
            text-decoration: none;
        }

        .icon-bar a:hover {
            background-color: gray;
        }

        .header {
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .footer {
            position:absolute;
            width:100%;
            background-color: rgb(189, 189, 194);
            text-align: center;
            padding: 15px;
        }
        .tabela {
        border-collapse: collapse;
        width: 100%;
        padding: 8px;
        text-align: center;
        }

        .tabela th {
        background-color: rgb(192, 192, 231);
        border-radius: 5px;
        }

        * {
            font-family: Tahoma;
        }
    </style>
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

    <div class="container" style="margin-top: 1%; text-align: center;">
        <h2>Index</h2>
        <p>Aqui temos o index da página.</p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <div class="footer">
        <table class="tabela">
            <tr>
                <td><b>Rian Tedesco</b></td>
                <td><b>Eduarda Cansi</b></td>
            </tr>
            <tr>
                <td><b>182747@upf.br</b></td>
                <td><b>182738@upf.br</b></td>
            </tr>
            <tr>
                <td><b>(54) 99908-2352</b></td>
                <td><b>(54) 99657-7328</b></td>
            </tr>
        </table>
    </div>
</body>
</html>
