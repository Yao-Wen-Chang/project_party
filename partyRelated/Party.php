<?php
class Party {
    private $db;
    
    function __construct($dn_connection) {
        $this->db = $dn_connection;
    }
    
    function createNewParty($party_name, $member_limit) {
        try {
            $query = "INSERT INTO party_online (party_name , member_limit, current_member_number) VALUES (:party_name, :member_limit, :current_member_number)";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(":party_name", $party_name);
    	    $preparation->bindValue(":member_limit", $member_limit);
		    $preparation->bindValue(":current_member_number", 1);
		    $preparation->execute();
            
        
        
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    }
    
    
    function searchParty($party_name) {
        try {
            $query = "SELECT * FROM party_online WHERE party_name LIKE concate('%', ?, '%')";
            $preparation = $this->db->prepare($query); 
            $preparation->execute([$party_name]);
            if($preparation->rowCount() >= 1){
                $party = $preparation->fetchAll(PDO::FETCH_OBJ);
                if($party->party_name)
                    return $party;
            }
            else 
                return false;
        
        
        
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    
    
    }
    
    function getAllParty() {
        try {
            $query = "SELECT * FROM exist_parties";
            $preparation = $this->db->prepare($query); 
            $preparation->execute();
            $party = $preparation->fetchAll(PDO::FETCH_OBJ);
            return $party;
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    }
    
    function getAllPartyRequest() {
    
    
    }
    
    function sendPartyRequest() {
        
    }
    
    function rejectPartyRequest() {
    
    
    }
    
    function acceptPartyRequest() {
    
    
    }
    

}


?>
