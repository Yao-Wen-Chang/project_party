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
            $preparation.bindValue(':my_id', $my_id, PDO::PARAM_STR);
            $preparation.bindValue(':friend_id', $friend_id, PDO::PARAM_STR);
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
    function getAllFriend($my_id) {
        try {
            $query = "SELECT * FROM Friendship WHERE user_one = :my_id OR user_two = :my_id)";
            $preparation = $this->db->prepare($query);
            $preparation.bindValue(':my_id', $my_id, PDO::PARAM_STR);
            
            $preparation->execute();
            $friend_list = $preparation->fetchAll(PDO::FETCH_ASSOC);
            $return_data = [];
            foreach($friend_list as $rows) {
                if($rows["user_one"] == $my_id) {
                    array_push($return_data, $rows["user_two"]);
                    
                }
                else {
                    array_push($return_data, $rows["user_one"]); 
                
                }
            
            }
            return $return_Data;
            
        }
        catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    
    
    }

}



?>
