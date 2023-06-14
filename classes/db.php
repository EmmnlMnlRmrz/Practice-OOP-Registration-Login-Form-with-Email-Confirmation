<?php 

class db {

    public $host = "localhost";
    public $user = "root";
    public $db = "profilemy";
    public $password = "";
    protected $con;

    public function __construct(){


         try {
            
            $this->con = new PDO
            ("mysql:host=" . HOST . ";
            dbname=" . DB, USER, PASSWORD);

         }

         catch(PDOException $e){     
            echo "Connection Error: " . $e->getMessage();
    }
    }

}


?>