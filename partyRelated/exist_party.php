<?php
    require "initParty.php";
    $q = $_GET['q'];
    $party_list = $party_obj->searchParty($q);
    if($party_list){
        echo "
            <tr>
                <td>".$party_list->party_name."</td>
                <td>".$party_list->party_holder."</td>
                <td>".$party_list->member_limit."</td>
                <td>".$party_list->current_member_number."</td>
            </tr>
        ";
    }
    else {
        echo "no suggestion";
    
    }
?>
