<?php 
    // class Database{

    //     static public function connection(){
    //         // creation de la méthode connection avec static et public
    //         try{ // essaye de te connecter à la db
    //            $dbconnect="mysql:host=localhost;dbname=register;charset=utf8";
               
    //         }catch(PDOExeption $e){ // si erreur/exeption affiche 
    //             echo "Fail to connect DB";
    //         }
            
    //         return new PDO($dbconnect,'root','');
    //     }
    // }

    class Database{

        private $servername;
        private $username;
        private $password;
        private $dbname;

        protected function connect(){
            $this->servername ="localhost";
            $this->username ="root";
            $this->password ="";
            $this->dbname ="ooptutorial";

            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            return $conn;
        }

    }


?>