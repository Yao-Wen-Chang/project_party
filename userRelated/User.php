<?php
    session_start();

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
                        //$db_row['Password'] = password_hash($db_row['Password'], PASSWORD_DEFAULT);
                        $password_match = password_verify($this->password, $db_row['Password']);
                        if($password_match) {
                            $_SESSION["ID"] = $db_row["ID"];
                            $_SESSION["username"] = $db_row["Username"];
                            $_SESSION["email"] = $db_row["Email"];
                            $_SESSION["password"] = $db_row["Password"];
                            $_SESSION["gender"] = $db_row["Gender"];
                            $_SESSION["birth"] = $db_row["Birth"];
                            $_SESSION["city"] = $db_row["City"];
                            $_SESSION["job"] = $db_row["Job"];
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

        function Signup ($_username, $_email, $_password, $_gender, $_birth, $_city, $_job) {
            $this->email = trim($_email);
            $this->password = trim($_password);
            $this->username = trim($_username);
            if(!empty($this->email) && !empty($this->password) && !empty($this->username) && !empty($_gender) && !empty($_birth)) {
                try {
                    if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                        $query = "SELECT Email FROM Users WHERE Email = ?";
                        $preparation = $this->db->prepare($query);
                        $preparation->execute([$this->email]);
                        if($preparation->rowCount() === 1) {
                            return FALSE;	                
                        }
                        else {
                            $hash_password = password_hash($this->password, PASSWORD_DEFAULT);
                            $query = "INSERT INTO Users (Username, Password, Email, Gender, Birth, City, Job) VALUES (:username, :password, :email, :gender, :birth, :city, :job)";
                            $preparation = $this->db->prepare($query);
                            $preparation->bindValue(":username", $this->username);
                            $preparation->bindValue(":password", $hash_password);
                            $preparation->bindValue(":email", $this->email);
                            $preparation->bindValue(":gender", $_gender);
                            $preparation->bindValue(":birth", $_birth);
                            $preparation->bindValue(":city", $_city);
                            $preparation->bindValue(":job", $_job);
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
                $query = "SELECT Username, Gender, Birth, Email FROM Users WHERE Username = ?";
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
