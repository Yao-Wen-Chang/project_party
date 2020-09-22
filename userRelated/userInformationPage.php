<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>User Information</title>
    </head>
    <body>
        
    </body>
</html>
<?php
    require "initUser.php";
    echo "
        <tr>
            <td>username: ".$_SESSION["username"]."</td>
        </tr>    
        <tr>    
            <td>email: ".$_SESSION["email"]."</td>
        </tr>
        <tr>
            <td>password: ".$_SESSION["password"]."</td>
        </tr> 
        <tr> 
            <td>gender: ".$_SESSION["gender"]."</td>
        </tr>
        <tr>
            <td>birth: ".$_SESSION["birth"]."</td>
        </tr>
        <tr>
            <td>photo: ".$_SESSION["photo"]."</td>
        </tr>
    
    
    ";


?>


