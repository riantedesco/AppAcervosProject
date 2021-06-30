<?php
    session_start();
    include '../Model/Item.php';
    include '../Include/ItemValidate.php';
    include '../Dao/ItemDAO.php';

    function criar () {
        $erros = array();

        if (count($erros) == 0) {
            $acervo = unserialize($_SESSION['acervo']);
    
            $item = new Item();

            $item->nome = $_POST['txtNome'];
            $item->quantidade = $_POST['txtQuantidade'];
            $item->dataInclusao = $_POST['txtDataInclusao'];
            $item->acervo = $acervo[0]['id'];

            $itemDao = new ItemDAO();
            $itemDao->create($item);
    
            listar();

            die();
        } else {
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/Item/error.php");
        }    
    }
    
    function listar () {
        $acervo = unserialize($_SESSION['acervo']);
        $idAcervo = $acervo[0]['id'];

        $itemDao = new ItemDAO();
        $item = $itemDao->search($idAcervo);
    
        $_SESSION['item'] = serialize($item);
        header("location:../View/Item/list.php");
    }
    
    function atualizar () {
        echo 'Método para atualizar um item.';
    }
    
    function deletar () {
        $id = $_GET['id'];
        if (isset ($id)) {
            $itemDao = new ItemDAO();
            $itemDao->delete($id);
            header("location:../Controller/ItemController.php?operation=consultar");
        } else {
            echo "Item não existente.";
        }
    }
    
    $operacao = $_GET['operation'];
    if (isset ($operacao)) {
        switch ($operacao) {
            case 'cadastrar':
                criar();
                break;
            case 'consultar':
                listar();
                break;
            case 'atualizar':
                atualizar();
                break;
            case 'excluir':
                deletar();
                break;
        }
    } 
?>