<?php
    require "initUser.php";
    $selectedUser = $_POST["selectedUser"];
    $friendList = $friend_obj->getAllFriend($selectedUser);
    $personalInformation = $user_obj->getUserInformation($selectedUser);
    
?>

<html>
    <head>
    </head>
    <body>
        
        <div class="userPhoto">
            <div class="coverPhoto">
                
            </div>
            <div class="personalPhoto">
                <img src="data:image/png;base64" alt="this is user photo" class="userPhoto">
            </div>           
        </div>
        <div class="personalInformation"> 
            <?php
                if(is_array($friendList)){
                  $count = count($friendList);
                } else {
                  $count = '0';
                }
                
                if($count > 0)
                    for ($i = 0; $i < $count; $i++) {
                        echo $friendList[$i];
                    } 
                foreach($personalInformation as $key => $value) {
                    if($key == "username" || $key == "gender" || $key == "birth") {
                        echo $value;
                        echo "<br>";
                    }    
                }             
            ?>
        </div>
        <div class="personalArtical">
            <?php
                echo $personalInformation["autobiography"];
                echo "<br>";
            ?>
        </div>   
        <>
    
    </body>
</html>
<style>
    body {
        background-image: url(../backgroundPhoto/personalPage.jpg);
    
    
    }
    
    .userPhoto {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    
    
    }
    
    
</style>

