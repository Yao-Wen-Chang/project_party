<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    class Post {
        private $db;
        function __construct($dbConnect) {
            $this->db = $dbConnect;
        }
        
        function AddPost($content) {
		    $query = "
                INSERT INTO Posts (Poster, Post_content) VALUES (:username, :content);
            ";
            $preparation = $this->db->prepare($query);
            $preparation->bindValue(":username", $_SESSION["username"]);
            $preparation->bindValue(":content", $content);
            $preparation->execute();

            $lastID = $this->db->lastInsertId();
		    $query = "
                INSERT INTO User_Post (PostID, UserID) VALUES (:userID, :postID);
            ";
            $preparation->bindValue(":userID", $_SESSION["ID"]);
            $preparation->bindValue(":postID", $lastID);
            $preparation->execute();

            return true;	                
        }
        
        function GetUserPosts($userID) {
            $query = "
                SELECT Posts.Poster, Posts.Post_content, Posts.Post_time, Posts.Like_num FROM Posts
                INNER JOIN User_Post ON Posts.ID = User_Post.PostID 
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
