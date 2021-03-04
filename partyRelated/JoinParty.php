<?php
    require "../init.php"; 
    $vacancy = $partyObj->checkMemberNum($partyID);  
    if($vacancy) 
        return true;
    else
        return false;

?>
