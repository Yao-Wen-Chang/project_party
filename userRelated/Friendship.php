<?php

class Friendship {

    private $db;
    
    
    function __construct($dn_connection) {
        $this->db = $dn_connection;
    }
    #not finish
    function createFriendship($my_id, $friend_id) {
        try {
            $query = "INSERT INTO users (user_one, user_two) VALUES (:user_one, :user_two)";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(":user_one", $my_id);
		    $preparation->bindValue(":user_two", $friend_id);
		    $preparation->execute();
		    
        
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    
    
    }

    function searchUser($search_user_id) {
         try {
            $query = "SELECT * FROM users WHERE username = ?";
            $preparation = $this->db->prepare($query); 
            $preparation->execute([$search_user_id]);
            if($preparation->rowCount() >= 1){
                $user_list = $preparation->fetchAll(PDO::FETCH_OBJ);
                return $user_list;
            }
            else 
                return false;
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }  
    }
    
    function isAlreadyFriend($my_id, $friend_id) {
        try {
            $query = "SELECT user_one, user_two FROM Friendship WHERE (user_one = :my_id AND user_two = :friend_id) OR (user_one = :friend_id AND user_two = :my_id)";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(':my_id', $my_id, PDO::PARAM_STR);
            $preparation->bindValue(':friend_id', $friend_id, PDO::PARAM_STR);
            $preparation->execute();
            if ($preparation->rowCount() >= 1) 
                return true;
            else 
                return false;
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    
    }
    function getAllFriend($username) {
        try {
            $query = "SELECT * FROM Friendship WHERE (user_one = :username) OR (user_two = :username)";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(':username', $username, PDO::PARAM_STR);
            $preparation->execute();
            $friend_list = $preparation->fetchAll(PDO::FETCH_ASSOC);
            $returnData = [];
            foreach($friend_list as $rows) {
                if($rows["user_one"] == $username) {
                    array_push($returnData, $rows["user_two"]);                  
                }
                else {
                    array_push($returnData, $rows["user_one"]);                 
                }          
            }  
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    }
    
    function alreadySendRequest($myID, $userID) {
        try {
            $query = "SELECT * FROM friendRequest WHERE (sender = :myID AND receiver = :userID) OR (sender = :userID AND receiver = :myID)";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(':myID', $myID, PDO::PARAM_STR);
            $preparation->bindValue(':userID', $userID, PDO::PARAM_STR);
            $preparation->execute();
            if($preparation->rowCount() === 1) 
                return true;
            else
                return false;    
        
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            return false;  
        }
    
    
    
    }
    
    function sendRequest($my_id, $receiver_id) {
        try {
            $query = "INSERT INTO friendRequest (sender, receiver) VALUES (:sender, :receiver)";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(':sender', $my_id, PDO::PARAM_STR);
            $preparation->bindValue(':receiver', $receiver_id, PDO::PARAM_STR);
            $preparation->execute();
            return true;
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    
    }
    # not complete
    function rejectRequest($myUsername, $senderUsername) {
        try {
            $query = "DELETE FROM friendRequest WHERE (receiver = :receiver and sender = :sender)";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(':sender', $senderUsername, PDO::PARAM_STR);
            $preparation->bindValue(':receiver', $myUsername, PDO::PARAM_STR);
            $preparation->execute();
            return true;    
        
        
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    
    }
    # not complete
    function acceptRequest($myUsername, $senderUsername) {
        try {
            $query = "
                DELETE FROM friendRequest WHERE (receiver = :receiver and sender = :sender);
                INSERT INTO friendship (user_one, user_two) VALUES (:user_one, :user_two);
                
            ";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(':sender', $senderUsername, PDO::PARAM_STR);
            $preparation->bindValue(':receiver', $myUsername, PDO::PARAM_STR);
            $preparation->bindValue(':user_one', $senderUsername, PDO::PARAM_STR);
            $preparation->bindValue(':user_two', $myUsername, PDO::PARAM_STR);
            $preparation->execute();
            return true;
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    
    }
    # not complete
    function ableSetFriendship($myID, $userID) {
        try {
            $query = "SELECT * FROM friendRequest WHERE (sender = :userOne AND receiver = :userTwo) OR (sender = :userTwo AND receiver = :userOne)";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(':sender', $myID, PDO::PARAM_STR);
            $preparation->bindValue(':receiver', $userID, PDO::PARAM_STR);
            $preparation->execute();
            if($preparation->rowCount() === 2) 
                return true;
            else
                return false;
        }        
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            
        }
    
    }
    
    function getAllFriendRequest($myUsername) {
        try {
            $query = "SELECT sender FROM friendRequest WHERE receiver = ?";
            $preparation = $this->db->prepare($query);
            $preparation->execute([$myUsername]);
            $returnData = [];
            if($preparation->rowCount() > 0) {
                $friendRequestList = $preparation->fetchAll(PDO::FETCH_ASSOC);
                foreach($friendRequestList as $key => $value)      
                    array_push($returnData, $value);           
            }
            return $returnData;    
            
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            
        }
    }

}



?>
