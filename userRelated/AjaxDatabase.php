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
            <form action = "./userPage.php" method = "post">         
                <?php
                    foreach($result as $row) {
                        foreach($row as $key => $value) {
                            if($key == "photo") 
                                echo '<img src="data:image/png;base64,'.base64_encode($value).'"/>';
                            else if($key == "username") {
                                echo '<input type="submit" name="selectedUser" value="'.$value.'">'; 
                                echo '<br>';
                            }    
                        }
                    }    
                ?>
            </form>
        </div>
    </body>
</html>


