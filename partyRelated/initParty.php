<?php    
    require "databasePartyConnection.php";
    require "party.php";
    $db = new Database();
    $db_connection = $db->dbConnection();
    $party_obj = new Party($db_connection);
    
?>    
