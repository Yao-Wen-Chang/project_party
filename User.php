<?php
class User {
    private $username;
    private $email;
    private $password;

    private $db;

    function __construct ($dn_connection) {
        $this->db = $dn_connection;
    }
    function Login ($_email, $_password) {
        $this->email = trim($_email);
        $this->password = trim($_password);
        if(!empty($this->email) && !empty($this->password)) {
			try {	
				$query = "SELECT * FROM users WHERE email = ?";
				$preparation = $this->db->prepare($query);
				$preparation->execute([$this->email]);
				
				if($preparation->rowCount() === 1) {
				    $db_row = $preparation->fetch(PDO::FETCH_ASSOC);
					$password_match = password_verify($this->password, $db_row['password']);
				    if($password_match) {
				        return TRUE; 
				    }
				    else {
				        return FALSE;
				    }       
				}
				else {
				    return FALSE;
				}
			}	
			catch(PDOException $exception) {
		        echo "Error: " . $exception->getMessage();
		        exit;
		   	}
		}
        else {
            return FALSE;
        }
    }

    function Signup ($_username, $_email, $_password, $_gender, $_birth, $_photo) {
        $this->email = trim($_email);
        $this->password = trim($_password);
        $this->username = trim($_username);
        if(!empty($this->email) && !empty($this->password) && !empty($this->username) && !empty($_gender) && !empty($_birth)) {
            try {
		        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
		            $query = "SELECT email FROM users WHERE email = ?";
		            $preparation = $this->db->prepare($query);
		            $preparation->execute([$this->email]);
		            if($preparation->rowCount() === 1) {
						return FALSE;	                
		            }
		            else {
						$hash_password = password_hash($this->password, PASSWORD_DEFAULT);
		                $query = "INSERT INTO users (username, password, email, gender, birth, photo) VALUES (:username, :password, :email, :gender, :birth, :photo)";
		                $preparation = $this->db->prepare($query);
		                $preparation->bindValue(":username", $this->username);
		                $preparation->bindValue(":password", $hash_password);
		                $preparation->bindValue(":email", $this->email);
		                $preparation->bindValue(":gender", $_gender);
		                $preparation->bindValue(":birth", $_birth);
		                $preparation->bindValue(":photo", $_photo);
		                $preparation->execute();
		                return TRUE;	                
		            }            
		        }
		        else {
		        	return FALSE;
		        }
		    }
		    catch(PDOException $exception) {
		        echo "Error: " . $exception->getMessage();
		        exit;
        	}    
        }
        else {
            return FALSE;        
        }    
    }
    
}




?>
