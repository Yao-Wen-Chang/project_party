<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Main Page</title>
    </head>
    <body>
        <?php
            require "initParty.php";
            $partyList = $party_obj->getAllParty();
            foreach($partyList as $val) {
                echo "<tr>
                          <td>".$val->party_name."</td>
                          <td>".$val->party_holder."</td>  
                          <td>".$val->current_member_number."</td> 
                          <td>".$val->member_limit."</td>        
                      </tr>  
                ";
                
                
                        
            
            }
            
        ?> 
       
    </body>
</html>
