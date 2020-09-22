<?php
class Party {
    private $db;
    
    function __construct($dn_connection) {
        $this->db = $dn_connection;
    }
    
    function createNewParty($party_name, $member_limit) {
        try {
            $query = "INSERT INTO party_online (party_name , member_limit) VALUES (:party_name, :member_limit)"
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(":party_name", $party_name);
		    $preparation->bindValue(":member_limit", $member_limit);
		    $preparation->execute();
            
        
        
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    }
    
    
    function searchParty($party_id) {
        try {
            $query = "SELECT * FROM party_online WHERE id = ?";
            $preparation = $this->db->prepare($query); 
            $preparation->execute([$party_id]);
            if($preparation->rowCount() >= 1){
                $party = $preparation->fetchAll(PDO::FETCH_OBJ);
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
            $query = "SELECT * FROM party_online";
            $preparation = $this->db->prepare($query); 
            $preparation->execute();
            $party = $preparation->fetchAll(PDO::FETCH_OBJ);
            return $party;
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    }


}


?>
