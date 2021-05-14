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
                    "INSERT INTO item (nome, quantidade, dataInclusao) VALUES  (?, ?, ?)"
                );

                $statement->bindValue (1, $item->nome);
                $statement->bindValue (2, $item->quantidade);
                $statement->bindValue (3, $item->dataInclusao);

                $statement->execute();

                // var_dump($statement); die();

                //encerra conexão
                $this->connection= null;
            } catch(PDOException $e){
                echo "Ocorreram erros ao inserir novo usuario!";
                echo $e;
            }
        }
    }