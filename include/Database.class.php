<?php
    class Database{
        /* //Originalmente estaban delaradas así:
            private $host = 'localhost:8889';
            private $user = 'test';
            private $password = 'test';
            private $database = 'code_pills';
        */
        //Pero mejor, 1ero se delcaran las variables que se usarán
        private $dbConf; //ARRAY
        //2do, Lo siguiente es asignarles valor vía constructor
            public function __construct(){
                include('env.php'); //Aqui está declarado el arreglo con los datos
                $this->dbConf = $dbConf;
            }

        public function getConnection()
        {   //Se usa el esquema de conexión PDO
            //$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
            $hostDB = "mysql:host=".$this->dbConf['DB_HOSTp']."; dbname=".$this->dbConf['DB_DATABASE'].";";

            try{ //Se prueba conexión a BD...
                //echo "hostDB>$hostDB, ".$this->dbConf['DB_USERNAME'].", ".$this->dbConf['DB_PASSWORD']."\n";
                $connection = new PDO($hostDB, $this->dbConf['DB_USERNAME'], $this->dbConf['DB_PASSWORD']);
                $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $connection;
            } catch(PDOException $e){
                die("ERROR: ".$e->getMessage());
            }

        }
    }
?>