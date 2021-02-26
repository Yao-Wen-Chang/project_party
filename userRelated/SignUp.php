<?php
    require "../init.php"; 
    $signup = $userObj->Signup($_POST["username"], $_POST["email"], $_POST["password"], $_POST["gender"], $_POST["birth"]);
    if(!$signup) {
	    echo '
            <script type = "text/javascript">
                alert("Register again!");
	            window.location.href = "./SignUp.php";	
            </script>
	    '; 
        
    }
    else {
	    echo '
	    <script language="javascript">
	        alert("Successful!");
	        window.location.href = "./LoginPage.php";
	    </script>
	    ';
           
    }
?>

