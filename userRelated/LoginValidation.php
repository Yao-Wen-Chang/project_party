<?php
    require "../init.php";
    $login = $userObj->Signin($_POST["email"], $_POST["password"]);
    if(!$login) {
        echo '
        <script type = "text/javascript">
            alert("Wrong Input!");
            window.location.href = "./LoginPage.php";       
        </script>
        '; 

    }
    else {
        echo '
        <script language="javascript">
            alert("Successful!");
            window.location.href = "./MainPage.php";
        </script>
        ';

    }


?>
