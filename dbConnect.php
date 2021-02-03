<?php
class Database {
    public function dbConnection () {
        $db_host = "localhost";
        $db_name = "OnlineDating";
        $db_username = "root";
        $db_password = "wen870629";
        try {
            $connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $connection;
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            exit;
        }
        
    }     
}    
?>
