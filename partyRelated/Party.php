<?php
class Party {
    private $db;
    
    function __construct($dn_connection) {
        $this->db = $dn_connection;
    }
    
    function createNewParty($name, $type, $loc, $memberLimit, $description) {
        try {
            $query = "INSERT INTO Parties (Party_name , Holder, Party-type, Location, Limit_members_num, Description) VALUES (:Party_name , :Holder, :Party-type, :Location, :Limit_members_num, :Description)";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(":Party_name", $name);
            $preparation->bindValue(":Party_type", $type);
            $preparation->bindValue(":Location", $loc);
    	    $preparation->bindValue(":Limit_members_num", $memberLimit);
    	    $preparation->bindValue(":Description", $description);
		    $preparation->execute();
            
        
        
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    }
    
    
    function searchParty($party_name) {
        try {
            $query = "SELECT * FROM Parties WHERE party_name LIKE concate('%', ?, '%')";
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
            $query = "SELECT * FROM Parties";
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
