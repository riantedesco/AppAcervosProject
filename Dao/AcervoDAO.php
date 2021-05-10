<?php
    include '../Persistence/ConnectionDB.php';

    class AcervoDAO {
        private $connection = null;

        public function __construct(){
            $this->connection = ConnectionDB::getInstance();
        }

        public function create($acervo){
            try{
                $statement = $this->connection->prepare(
                    "INSERT INTO acervo (titulo, conteudo, dataCriacao) VALUES  (?, ?, ?)"
                );

                $statement->bindValue (1, $acervo->titulo);
                $statement->bindValue (2, $acervo->conteudo);
                $statement->bindValue (3, $acervo->dataCriacao);

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

?>