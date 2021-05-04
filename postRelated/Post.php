<?php
    
    class Post {
        private $db;
        function __construct($dbConnect) {
            $this->db = $dbConnect;
        }
        
        function AddPost($user, $content, $img) {
		    $query = "INSERT INTO Posts (owner, content, img) VALUES (:owner, :content, :img)";
            
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(":owner", $user);
            $preparation->bindValue(":content", $content);
            $preparation->bindValue(":img", $img);

            $preparation->execute();
            return TRUE;	                
        }
        function GetUserPosts($userID) {
            $query = "SELECT Posts.Post_content, Posts.Post_time, Like_num
                FROM Posts INNER JOIN User_Post ON Posts.ID = User_Post.PostID
                INNER JOIN Users ON User_Post.UserID = Users.ID
                WHERE Users.ID = ?

            ";
            $preparation = $this->db->prepare($query);

            $preparation->execute([$userID]);

            $data = $preparation->fetchAll(PDO::FETCH_OBJ);
            if($preparation->rowCount()>0)
                return $data;
            else
                return false;
        }
        function GetAllPost($userID) {
            

        } 
        function DeletePost() {



        }


        function EditPost() {



        }
    }    



?>
