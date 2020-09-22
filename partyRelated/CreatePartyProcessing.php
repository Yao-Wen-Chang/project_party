<?php
    require "initParty.php";
    $party_obj->createNewParty($_POST["partyName"], $_POST["memberQuantity"]); 
    echo '
	    <script language="javascript">
	        alert("Successful Create a Party!");
	        window.location.href = "../userRelated/MainPage.html";
	    </script>
	    ';   
?>
