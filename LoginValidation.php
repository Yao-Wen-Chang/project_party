<?php
    require "Init.php";
    $login = $user_obj->Login($_POST["email"], $_POST["password"]);
    if(!$login) {
        echo '
        <script type = "text/javascript">
            alert("Wrong Input!");
            window.location.href = "./LoginPage.html";       
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
