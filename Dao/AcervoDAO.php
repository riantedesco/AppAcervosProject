<?php
    include '../Persistence/ConnectionDB.php';

    class AcervoDAO {
        private $connection = null;

        public function __construct() {
            $this->connection = ConnectionDB::getInstance();
        }

        public function create($acervo) {
            try{
                $statement = $this->connection->prepare(
                    "INSERT INTO acervo (titulo, conteudo, dataCriacao, usuario) VALUES  (?, ?, ?, ?)"
                );

                $statement->bindValue (1, $acervo->titulo);
                $statement->bindValue (2, $acervo->conteudo);
                $statement->bindValue (3, $acervo->dataCriacao);
                $statement->bindValue (4, $acervo->usuario);

                $statement->execute();

                // var_dump($statement); die();

                //encerra conexão
                $this->connection= null;
            } catch(PDOException $e) {
                echo "Ocorreram erros ao inserir novo acervo!";
                echo $e;
            }
        }

        public function search () {
            try {
                $statement = $this->connection->prepare("SELECT * FROM acervo");
                $statement->execute();
                $dados = $statement->fetchAll();
                $this->connection = null;

                return $dados;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao buscar os acervos.";
                echo $e;
            }
        }

        public function delete ($id) {
            try {
                $statement = $this->connection->prepare("DELETE * FROM acervo WHERE id = ?");
                $statement->bindValue (1, $id);
                $statement->execute();

                $this->connection = null;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao deletar o acervo.";
                echo $e;
            }
        }
    }
?>