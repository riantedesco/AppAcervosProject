<?php
    session_start();
    include '../Model/Item.php';
    include '../Include/ItemValidate.php';
    include '../Dao/ItemDAO.php';

    if ((!empty($_POST['txtNome'])) &&
        (!empty($_POST['txtQuantidade'])) &&
        (!empty($_POST['txtDataInclusao']))) {
            $erros = array();

            if (count($erros) == 0) {
                $acervo = new Item();

                $acervo->nome = $_POST['txtNome'];
                $acervo->quantidade = $_POST['txtQuantidade'];
                $acervo->dataInclusao = $_POST['txtDataInclusao'];

                $_SESSION['item'] = $acervo->nome;
                header("location:../View/Item/detail.php");
            } else {
                $err = serialize($erros);
                $_SESSION['erros'] = $err;
                header("location:../View/Item/error.php");
            }    
        } else {
            $erros = array();
            $erros[] = 'Informe todos os campos!';
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/Item/error.php");
        }
?>