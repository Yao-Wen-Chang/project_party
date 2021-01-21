<?php
    session_start();
    session_regenerate_id(true);
    require "./userRelated/User.php";
    require "./userRelated/Friendship.php";
    require "./partyRelated/Party.php";
    require "./postRelated/Post.php"
    require "dbConnect.php";
    
    $db = new Database();
    $dbConnect = $db->dbConnection();
    
    $userObj = new User($dbConnect);
    $friendObj = new Friendship($dbConnect);
    $partyObj = new Party($dbConnect);
    $postObj = new Post($dbConnect);

?>
