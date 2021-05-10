<?php
    class ConnectionDB extends PDO {
        private static $instance = null;

        public function __construct ($dsn, $usuario, $senha){
            parent::__construct ($dsn, $usuario, $senha);
        }

        public static function getInstance(){
            if(!isset(self::$instance)){
                try{
                    //criar uma conexão
                    self::$instance = new ConnectionDB(
                        "mysql:dbname=trab_web;host=localhost",
                        "root",
                        ""
                    );
                    echo "Conexão realizada!";
                }catch(Exception $e){
                    echo "Ocorreram erros!";
                    echo $e;
                    die();
                    exit();
                }
            }
            return self::$instance;
        }
    }

?>