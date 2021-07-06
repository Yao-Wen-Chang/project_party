<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require "../init.php";
    $add = $postObj->AddPost($_GET["content"]);
    
    if(!$add) {
        echo '
        <script type = "text/javascript">
            alert("Error");
            window.location.href = "../userRelated/MainPage.php";       
        </script>
        '; 

    }
    else {
        echo '
        <script language="javascript">
            alert("Successful!");
            window.location.href = "../userRelated/MainPage.php";
        </script>
        ';

    }


?>
