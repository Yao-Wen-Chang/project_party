<?php
    require "initUser.php";
    $friendList = $friend_obj->getAllFriend($_POST["selectedUser"]);
    $personalInformation = $user_obj->getUserInformation($_POST["selectedUser"]);
    
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
        <div>
            <?php
                if($friend_obj->isAlreadyFriend($_SESSION["username"], $_POST["selectedUser"])) 
                    echo "<label>Already Been Friend</label>";
                else if($friend_obj->alreadySendRequest($_SESSION["username"], $_POST["selectedUser"]))    
                    echo "<label>Already Send Friend Request</label>";
                else
                    echo '<input id="buttonOfSendFriendRequest" type="button" value="Send Friend Request" onclick=disableButton();'.$friend_obj->sendRequest($_SESSION["username"], $_POST["selectedUser"]).'>';    
                    
                    //document.getElementById("Button").disabled = true;
            ?>             
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
        
    
    </body>
</html>
<script>
    function disableButton() {
        document.getElementById("buttonOfSendFriendRequest").disabled = true;
    }

</script>
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

