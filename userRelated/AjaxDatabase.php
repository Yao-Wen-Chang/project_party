<?php
    require "initUser.php";
    try {
        $db = new Database();
        $db_connection = $db->dbConnection();
        $query = "SELECT email, photo, username from users WHERE username = ?";
        $preparation = $db_connection->prepare($query);

        $preparation->execute([$_GET["username"]]);
        if($preparation->rowCount() === 0) 
            throw new Exception("id does not found");
        $result = $preparation->fetchAll(PDO::FETCH_ASSOC); 
        
    }    
    catch(PDOException $exception) {
        echo "Error: " . $exception->getMessage();
        exit;
    } 
?>
<html>
    <body>
        <div>
            <?php
                foreach($result as $row) {
                    foreach($row as $key => $value) {
                        if($key == "photo") 
                            echo '<img src="data:image/png;base64,'.base64_encode($value).'"/>';
                        else if($key == "username") {
                            echo '<button type="button">'.$value.'</button>';    
                            echo '<br>';
                        }    
                    }
                }    
            ?>
            
        </div>
    </body>
</html>

                        
<script>
    function sendFriendRequest(receiverUsername) {
        var xhttp;
        if(username == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        
        }
        xhttp.open("GET", "ajaxSendFriendRequest.php?username="+username, true);
        xhttp.send();
    }
</script>
