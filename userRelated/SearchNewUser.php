<?php
    require "../init.php";
    $username = $_GET["q"];
    $usersObj = $friendObj->searchUser($username);
    
    if($usersObj)
        $usernameList = "";
        foreach($usersObj as $user) {
            $usernameList .= "
                <p class='userInfo'>
                    ".$user->Username."

                </p>
                

            ";
        }
        
        
        echo $usernameList; 

?>
