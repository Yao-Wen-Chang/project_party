<?php
    require "Init.php";
    $signup = $user_obj->Signup($_POST["username"], $_POST["email"], $_POST["password"], $_POST["gender"], $_POST["birth"], $_POST["photo"]);
    if(!$signup) {
	    echo '
            <script type = "text/javascript">
                alert("Register again!");
	            window.location.href = "./CreateAccount.php";	
            </script>
	    '; 
        
    }
    else {
	    echo '
	    <script language="javascript">
	        alert("Successful!");
	        window.location.href = "./LoginPage.html";
	    </script>
	    ';
           
    }
?>




 
