<?php
    session_start();
    include '../Model/Usuario.php';
    include '../Dao/UsuarioDAO.php';

    function login() {
        $email = $_POST['txtEmail'];
        $senha = $_POST['txtSenha'];

        $usuarioDao = new UsuarioDAO();
        $usuario = $usuarioDao->find($email, $senha);

        if($usuario){
            $_SESSION['usuario'] = serialize($usuario);
            header("location:../View/home.php");
        }
        else{
            unset($_SESSION['usuario']);
            header("location:../index.php");
        }
    }

    function logout(){
        unset($_SESSION['usuario']);
        header("location:../index.php");
    }

    $operacao = $_GET['operation'];
    if(isset($operacao)){
        switch($operacao){
            case 'login':
                login();
                break;
            case 'logout':
                logout();
                break;
        }
    }
    
?>