<?php
    session_start();
    include '../Model/Livro.php';
    include '../Include/LivroValidate.php';

    if ((!empty($_POST['txtNome'])) &&
        (!empty($_POST['txtAutor'])) &&
        (!empty($_POST['txtGenero'])) &&
        (!empty($_POST['txtEditora'])) &&
        (!empty($_POST['txtAnoLancamento'])) &&
        (!empty($_POST['txtPreco'])) ) {
            $erros = array();

            if (!LivroValidate::testarAnoLancamento($_POST['txtAnoLancamento'])) {
                $erros[] = 'O ano de lançamento não é válido.';
            }
            if (!LivroValidate::testarPreco($_POST['txtPreco'])) {
                $erros[] = 'O preço precisa ser maior que 0.';
            }

            if (count($erros) == 0) {
                $livro = new Livro();

                $livro->nome = $_POST['txtNome'];
                $livro->autor = $_POST['txtAutor'];
                $livro->genero = $_POST['txtGenero'];
                $livro->editora = $_POST['txtEditora'];
                $livro->anoLancamento = $_POST['txtAnoLancamento'];
                $livro->preco = $_POST['txtPreco'];


                $_SESSION['livro'] = $livro->nome;
                $_SESSION['autor'] = $livro->autor;
                header("location:../View/Livro/detail.php");
            } else {
                $err = serialize($erros);
                $_SESSION['erros'] = $err;
                header("location:../View/Livro/error.php");
            }    
        } else {
            $erros = array();
            $erros[] = 'Informe todos os campos!';
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/Livro/error.php");
        }
?>