<?php
    session_start();
    session_regenerate_id(true);
    require "User.php";
    require "Friendship.php";
    require "databaseUserConnection.php";
    
    $db = new Database();
    $db_connection = $db->dbConnection();
    
    $user_obj = new User($db_connection);
    $friend_obj = new Friendship($db_connection);

?>
