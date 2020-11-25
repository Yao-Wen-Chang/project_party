<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Main Page</title>
    </head>
    <body>
	    <form>
            <input type="text" size="30" onkeyup="searchExistParty(this.value)">
            <div id="livesearch"></div>
        </form>
 
       
    </body>
</html>

<script>
    function searchExistParty(name) {
        if(name.length == 0) {
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                document.getElementById("livesearch").innerHTML = this.responseText;
                document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
          
            }
        }

        xmlhttp.open("GET", "exist_party.php?q=" + name, true);
        xmlhttp.send();
    }
</script>
