<?php
    session_start();
    include '../Model/Acervo.php';
    include '../Include/AcervoValidate.php';
    include '../Dao/AcervoDAO.php';

    function criar () {
        $erros = array();

        if (count($erros) == 0) {
            $usuario = unserialize($_SESSION['usuario']);

            $acervo = new Acervo();

            $acervo->titulo = $_POST['txtTitulo'];
            $acervo->conteudo = $_POST['txtConteudo'];
            $acervo->dataCriacao = $_POST['txtDataCriacao'];
            $acervo->usuario = $usuario[0]['id'];

            $acervoDao = new AcervoDAO();
            $acervoDao->create($acervo);

            listar();
            
            die();
        } else {
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/Acervo/error.php");
        }    
    }

    function listar () {
        $acervoDao = new AcervoDAO();
        $acervo = $acervoDao->search();

        $_SESSION['acervo'] = serialize($acervo);
        header("location:../View/Acervo/list.php");
    }

    function atualizar () {
        echo 'Método para atualizar um acervo.';
    }

    function deletar () {
        $id = $_GET['id'];
        if (isset ($id)) {
            $acervoDao = new AcervoDAO();
            $acervoDao->delete($id);
            header("location:../Controller/AcervoController.php?operation=consultar");
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