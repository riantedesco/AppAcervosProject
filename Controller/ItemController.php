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
                $item = new Item();

                $item->nome = $_POST['txtNome'];
                $item->quantidade = $_POST['txtQuantidade'];
                $item->dataInclusao = $_POST['txtDataInclusao'];

                $itemDao = new ItemDAO();
                $itemDao->create($item);

                $_SESSION['item'] = $item->nome;
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