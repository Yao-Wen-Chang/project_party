<?php
require "databaseConnection.php";
try {
    $db = new Database();
    $db_connection = $db->dbConnection();
    $query = "SELECT username, photo from users WHERE username = ?";
    $preparation = $db_connection->prepare($query);

    $preparation->execute([$_GET["username"]]);
    if($preparation->rowCount() === 0) 
        throw new Exception("id does not found");
    $result = $preparation->fetch(PDO::FETCH_ASSOC); 
    foreach($result as $key => $value) {
        if($key == "photo") {
            echo '<img src="data:image-jpeg;charset=utf-8;base64,'.base64_encode( $value ).'"/>'; // img not appear
        
        }
        else
            echo $value;
        

    }

}    
catch(PDOException $exception) {
    echo "Error: " . $exception->getMessage();
    exit;
} 
?>
