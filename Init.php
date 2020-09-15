<?php
    session_start();
    require "User.php";
    require "Friendship.php";
    require "databaseConnection.php";
    
    $db = new Database();
    $db_connection = $db->dbConnection();
    
    $user_obj = new User($db_connection);
    $friend_obj = new Friendship($db_connection);

?>
