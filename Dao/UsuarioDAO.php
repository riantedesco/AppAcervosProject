<?php
    include '../Persistence/ConnectionDB.php';

    class UsuarioDAO {
        private $connection = null;

        public function __construct() {
            $this->connection = ConnectionDB::getInstance();
        }

        public function create($usuario) {
            try{
                $statement = $this->connection->prepare(
                    "INSERT INTO usuario (nome, sobrenome, idade, email, senha) VALUES (?,?,?,?,?)"
                );

                $statement->bindValue (1, $usuario->nome);
                $statement->bindValue (2, $usuario->sobrenome);
                $statement->bindValue (3, $usuario->idade);
                $statement->bindValue (4, $usuario->email);
                $statement->bindValue (5, $usuario->senha);

                $statement->execute();

                // var_dump($statement); die();

                //encerra conexão
                $this->connection= null;
            } catch(PDOException $e){
                echo "Ocorreram erros ao inserir novo usuario!";
                echo $e;
            }
        }

        public function find ($email, $senha){
            try{
                $statement = $this->connection->prepare("SELECT * FROM usuario where email = ? and senha = ?");
                $statement->bindValue (1, $email);
                $statement->bindValue (2, $senha);
                $statement->execute();
                $usuario = $statement->fetchAll();
                $this->connection = null;

                return $usuario;
            } catch (PDOException $e){
                echo "Ocorreram erros ao procurar o usuário";
                echo $e;
            }
        }
    }

?>