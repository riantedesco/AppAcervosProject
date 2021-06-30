<?php
    include '../Persistence/ConnectionDB.php';

    class ItemDAO {
        private $connection = null;

        public function __construct() {
            $this->connection = ConnectionDB::getInstance();
        }

        public function create($item) {
            try{
                $statement = $this->connection->prepare(
                    "INSERT INTO item (nome, quantidade, dataInclusao, acervo) VALUES  (?, ?, ?, ?)"
                );

                $statement->bindValue (1, $item->nome);
                $statement->bindValue (2, $item->quantidade);
                $statement->bindValue (3, $item->dataInclusao);
                $statement->bindValue (4, $item->acervo);

                $statement->execute();

                // var_dump($statement); die();

                //encerra conexão
                $this->connection= null;
            } catch(PDOException $e) {
                echo "Ocorreram erros ao inserir novo usuario!";
                echo $e;
            }
        }

        public function search ($idAcervo) {
            try {
                $statement = $this->connection->prepare("SELECT * FROM item WHERE acervo = ?");
                $statement->bindValue (1, $idAcervo);
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
                $statement = $this->connection->prepare("DELETE FROM item WHERE id = ?");
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