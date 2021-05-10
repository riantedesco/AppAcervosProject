<?php
    session_start();
    include '../Model/Acervo.php';
    include '../Include/AcervoValidate.php';
    include '../Dao/AcervoDAO.php';

    if ((!empty($_POST['txtTitulo'])) &&
        (!empty($_POST['txtConteudo'])) &&
        (!empty($_POST['txtDataCriacao']))) {
            $erros = array();

            if (count($erros) == 0) {
                $acervo = new Acervo();

                $acervo->titulo = $_POST['txtTitulo'];
                $acervo->conteudo = $_POST['txtConteudo'];
                $acervo->dataCriacao = $_POST['txtDataCriacao'];

                $_SESSION['acervo'] = $acervo->titulo;
                $_SESSION['conteudo'] = $acervo->conteudo;
                header("location:../View/Acervo/detail.php");
            } else {
                $err = serialize($erros);
                $_SESSION['erros'] = $err;
                header("location:../View/Acervo/error.php");
            }    
        } else {
            $erros = array();
            $erros[] = 'Informe todos os campos!';
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/Acervo/error.php");
        }
?>