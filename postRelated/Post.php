<?php
    
    class Post {
        private $db;
        function __construct($dbConnect) {
            $this->db = $dbConnect;
        }
        
        function AddPost($user, $content, $img) {
		    $query = "INSERT INTO posts (owner, content, img) VALUES (:owner, :content, :img)";
            
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(":owner", $user);
            $preparation->bindValue(":content", $content);
            $preparation->bindValue(":img", $img);

            $preparation->execute();
            return TRUE;	                
        }
        
        function DeletePost() {



        }


        function EditPost() {



        }
    }    



?>
