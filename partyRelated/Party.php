<?php


    class Party {
        private $db;
        
        function __construct($dn_connection) {
            $this->db = $dn_connection;
        }
        
        function createNewParty($name, $type, $loc, $time, $memberLimit, $description) {
            try {
                
                $query = "INSERT INTO Parties (Party_name , Holder, Party_type, Location, Party_time, Limit_members_num, Description) VALUES (:Party_name , :Holder, :Party_type, :Location, :Party_time, :Limit_members_num, :Description)";
                $preparation = $this->db->prepare($query);
                $preparation->bindValue(":Party_name", $name);
                $preparation->bindValue(":Holder", "WEN");
                $preparation->bindValue(":Party_type", $type);
                $preparation->bindValue(":Location", $loc);
                $preparation->bindValue(":Party_time", $time);
                $preparation->bindValue(":Limit_members_num", $memberLimit);
                $preparation->bindValue(":Description", $description);
                $result = $preparation->execute();

                
                if($result)
                    return TRUE;
                else 
                    return FALSE; 
            
            
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
        function getLimitCurrMember($partyID) {
            try {
                $query = "SELECT Limit_members_num, Curr_members_num FROM Parties WHERE ID = $partyID LIMIT 1";
                $preparation = $this->db->prepare($query);
                $preparation->execute();
                $data = $preparation->fetch(PDO::FETCH_OBJ);
                return $data;
                
            }
            catch(PDOException $exception) {
                echo "Error: " . $exception->getMessage();
            }
        }
        function getMyHoldParty () {


        } 
        function getJoinParty () {


        }
        function getAllPartyRequest() {
        
        
        }
        function checkMemberNum($partyID) {
            $data = $this->getLimitCurrMember($partyID); 
            if($data->Curr_members_num < $data->Limit_members_num) {
                return TRUE;
            }
            else 
                return FALSE;
        }

        function joinParty($partyID) {
            try {
                
                $data = $this->getLimitCurrMember($partyID); 
                if($data->Curr_members_num < $data->Limit_members_num) {
                    $update = $data->Curr_members_num + 1;
                    $query = "UPDATE Parties SET Curr_members_num = $update WHERE ID = $partyID";
                   
                    $preparation = $this->db->prepare($query);
                    $result = $preparation->execute();
                    if($result) {
                        $query = "INSERT INTO Partie_User (UserID, PartyID) VALUES (:UserID, :PartyID)";
                        $preparation = $this->db->prepare($query);
                        $preparation->bindValue(":UserID", $_SESSION["ID"]);
                        $preparation->bindValue(":PartyID", $partyID);
                        $result = $preparation->execute();
                        return true;
                    }
                    else 
                        
                        return true;
                }
                else 
                    return false;
                


            
            
            }
            catch(PDOException $exception) {
                echo "Error: " . $exception->getMessage();
            }

        } 
        function getMemberList($partyID) {
            try {
                $query = "SELECT Username, Gender, Birth, Job, City, Avatar FROM Users LEFT JOIN Party_User ON ID = UserID LEFT JOIN Parties ON PartyID = UserID AND PartyID = ?";
                
                $preparation = $this->db->prepare($query);

                $result = $preparation->execute([$partyID]);
                return true;
            }
            catch(PDOException $exception) {
                echo "Error: " . $exception->getMessage();
            }
            

        }
        function sendPartyRequest($partyID) {
                        
        }
        
        function rejectPartyRequest() {
        
        
        }
        
        function acceptPartyRequest() {
        
        
        }
        

    }


?>
