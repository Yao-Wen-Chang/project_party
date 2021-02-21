<?php
    require "../init.php";
    $partyObj->createNewParty($_POST["partyName"], $_POST["partyType"], $_POST["loc"], $_POST["limitMem"], $_POST["description"]); 
    echo '
	    <script language="javascript">
	        alert("Successful Create a Party!");
	        window.location.href = "../userRelated/MainPage.php";
	    </script>
	    ';   
?>
