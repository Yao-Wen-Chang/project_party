<?php
class User {
    private $username;
    private $email;
    private $password;

    private $db;

    function __construct ($dbConnect) {
        $this->db = $dbConnect;
    }
    function Signin ($_email, $_password) {
        $this->email = trim($_email);
        $this->password = trim($_password);
        if(!empty($this->email) && !empty($this->password)) {
			try {	
				$query = "SELECT * FROM Users WHERE Email = ?";
				$preparation = $this->db->prepare($query);
				$preparation->execute([$this->email]);
				
				if($preparation->rowCount() === 1) {
				    $db_row = $preparation->fetch(PDO::FETCH_ASSOC);
					$db_row['Password'] = password_hash($db_row['Password'], PASSWORD_DEFAULT);
					$password_match = password_verify($this->password, $db_row['Password']);
				    if($password_match) {
				        $_SESSION["username"] = $db_row["Username"];
				        $_SESSION["email"] = $db_row["Email"];
				        $_SESSION["password"] = $db_row["Password"];
				        $_SESSION["gender"] = $db_row["Gender"];
				        $_SESSION["birth"] = $db_row["Birth"];
				        $_SESSION["avatar"] = $db_row["Avatar"];
				         
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
    function getUserInformation($selectedUser) {
        try {
            $query = "SELECT username, gender, birth, photo, autobiography FROM users WHERE username = ?";
            $preparation = $this->db->prepare($query);
		    $preparation->execute([$selectedUser]);
		    $userInformation = $preparation->fetch(PDO::FETCH_ASSOC);
		    
		    return $userInformation;
    
        }
        catch(PDOException $exception) {
	        echo "Error: " . $exception->getMessage();
	        exit;
    	}

    }
    
    
}




?>
