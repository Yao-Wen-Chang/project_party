<?php
require "databaseConnection.php";
$db = new Database();
$db_connection = $db->dbConnection();
$query = "SELECT username, photo from users WHERE username = ?";
$preparation = $db_connection->prepare($query);

$preparation->execute([$_GET["username"]]);
$result = $preparation->fetch(PDO::FETCH_ASSOC); 
foreach($result as $key => $value) {
    if($key == "photo") {
        echo '<img src="data:image/jpeg;charset=utf-8;base64,'.base64_encode( $value ).'"/>';
    
    }
    else
        echo $value;
    

}
?>
