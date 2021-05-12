<?php
    include '../Persistence/ConnectionDB.php';

    class UserDAO {
        private $connection = null;

        public function __construct(){
            $this->connection = ConnectionDB::getInstance();
        }

        public function create($user){
            try{
                $statement = $this->connection->prepare(
                    "INSERT INTO usuario (nome, sobrenome, idade, email, senha) VALUES (?,?,?,?,?)"
                );

                $statement->bindValue (1, $user->nome);
                $statement->bindValue (2, $user->sobrenome);
                $statement->bindValue (3, $user->idade);
                $statement->bindValue (4, $user->email);
                $statement->bindValue (5, $user->senha);

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