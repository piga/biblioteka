<?php

class Database
{
    private $conn;
    private static $instance;
    
    private function __construct()
    {
        
    }
    
    public static function getInstance()
    {
            if(!self::$instance)
            {
                self::$instance = new self;
            }
            return self::$instance;
    }
    
    public function getConnection()
    {
        try
        {
            $this->conn = new PDO('mysql:host=localhost;dbname=knjiznica', "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            echo "Database connection sucesfull. <br>";
            return $this->conn;
        }
        catch(PDOException $e)
        {
            die("Error!: " . $e->getMessage() . "<br/>");
        }
    }
}

$db = Database::getInstance();
$conn = $db->getConnection();
?>