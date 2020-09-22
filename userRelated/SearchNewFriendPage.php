<html>
    <head>
        <meta charset = "utf-8">
        <title>Search Friend Page</title>
        
        
    </head>
    <body>
        
        <div class="combobox-wrapper">
            <div role="combobox" aria-expanded="false" aria-owns="listbox" aria-haspopup="listbox" id="ex1-combobox">
                <input type="text" onchange = "showUser(this.value)">
                <div id="txtHint">Customer info will be listed here...</div>
                <script>
                    function showUser(username) {
                        var xhttp;
                        if(username == "") {
                            document.getElementById("txtHint").innerHTML = "";
                            return;
                        }
                        xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if(this.readyState == 4 && this.status == 200) {
                                document.getElementById("txtHint").innerHTML = this.responseText;
                            }
                        
                        }
                        xhttp.open("GET", "AjaxDatabase.php?username="+username, true);
                        xhttp.send();
                    }
                </script>
            </div>
            <ul aria-labelledby="ex1-label" role="listbox" id="listbox" class="listbox hidden">
               
            </ul>
        </div>
    </body>
<html>
