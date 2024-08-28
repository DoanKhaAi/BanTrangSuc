<?php

class Database {

    public $conn;
    protected $host='localhost';
    protected $username='root';
    protected $password='';
    protected $dbname='php_bantrangsuc';

    function __construct(){
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    
    }
}
?>