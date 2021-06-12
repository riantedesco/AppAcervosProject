<?php
    session_start();
    include '../Model/Acervo.php';
    include '../Include/AcervoValidate.php';
    include '../Dao/AcervoDAO.php';

    function criar () {
        $erros = array();

        if (count($erros) == 0) {
            $user = unserialize($_SESSION['usuario']);

            $acervo = new Acervo();

            $acervo->titulo = $_POST['txtTitulo'];
            $acervo->conteudo = $_POST['txtConteudo'];
            $acervo->dataCriacao = $_POST['txtDataCriacao'];

            $acervoDao = new AcervoDAO();
            $acervoDao->create($acervo);

            listar();
        } else {
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/Acervo/error.php");
        }    
    }

    function listar () {
        $acervoDAO = new AcervoDAO();
        $acervos = $acervoDAO->search();

        $_SESSION['acervos'] = serialize($acervos);
        header("location:../View/Acervo/list.php");
    }

    function atualizar () {
        echo 'Método para atualizar um acervo.';
    }

    function deletar () {
        $id = $_GET['id'];
        if (isset ($id)) {
            $acervoDAO = new AcervoDAO();
            $acervoDAO->delete($id);
            header("location:../../Controller/AcervoController.php?operation=consultar");
        } else {
            echo "Acervo não existente.";
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