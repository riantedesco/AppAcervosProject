<?php
    session_start();
    include '../Model/Usuario.php';
    include '../Include/UsuarioValidate.php';
    include '../Dao/UsuarioDAO.php';

            $erros = array();

            if (!UsuarioValidate::testarIdade($_POST['txtIdade'])) {
                $erros[] = 'Idade inválida!';
            }
            if (!UsuarioValidate::testarEmail($_POST['txtEmail'])) {
                $erros[] = 'E-mail inválido!';
            }

            if (count($erros) == 0) {
                $usuario = new Usuario();

                $usuario->nome = $_POST['txtNome'];
                $usuario->sobrenome = $_POST['txtSobrenome'];
                $usuario->idade = $_POST['txtIdade'];
                $usuario->email = $_POST['txtEmail'];
                $usuario->senha = $_POST['txtSenha'];

                $usuarioDao = new UsuarioDAO();
                $usuarioDao->create($usuario);

                $_SESSION['nome'] = $usuario->nome;
                $_SESSION['email'] = $usuario->email;
                header("location:../View/Usuario/detail.php");
            } else {
                $err = serialize($erros);
                $_SESSION['erros'] = $err;
                header("location:../View/Usuario/error.php");
            }
?>