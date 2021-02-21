<?php
    require "../init.php";
    $bool = $partyObj->createNewParty($_POST["partyName"], $_POST["partyType"], $_POST["loc"], $_POST["limitMem"], $_POST["description"]); 
    if($bool){
        echo '
            <script language="javascript">
                alert("Successful Create a Party!");
                window.location.href = "../userRelated/MainPage.php";
            </script>
	    ';   
    
    }
    else
        print("false");
?>
