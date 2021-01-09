<!DOCTYPE html>
<html>
    <head>
        <title>Let's Party</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
          font-family: "Lato", sans-serif;
        }
        .icon-bar {
          width: 100%;
          background-color: #555;
          overflow: auto;
        }

        .icon-bar a {
          float: left;
          width: 20%;
          text-align: center;
          padding: 12px 0;
          transition: all 0.3s ease;
          color: white;
          font-size: 36px;
        }

        .icon-bar a:hover {
          background-color: #000;
        }

        .active {
          background-color: #4CAF50;
        }


        .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }

        .sidenav a:hover {
          color: #f1f1f1;
        }

        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
    </head>
    <body>
        <div> 
            <div class = "header">
                Let's Party
            </div>
            <div class = "page-transition">
                <a class = "active" href = "/"></a>
                <a class = "notification" href = ""></a>
                <a class = "create-party" href = ""></a> 
                <a class = "personal-page" href = ""></a> 
                <a class = "bar-profile" href = ""></a>
                <a class = "logout" href = "/LoginPage.php" ></a>
            </div>

            <div id = "x-side-nav" class = "side-nav">
                <ul>
                    <li>
                        <a href = "/" title = "Home">
                            <span>Home</span>
                    </li>
                    
                    <li>
                        <a href = "" title = "Home">
                            <span>Activity Pocket</span>
                    </li>
                    
                    <li>
                        <a href = "" title = "Guide">
                            <span>Guide</span>
                    </li>
                </ul>
                <a class = "close-nav" onclick = "closeNav()"></a> 	
                <button type="button" disabled>main page</button> // main page but should disable                      
                <button type="button"><a href = "../partyRelated/CreatePartyInterface.html">createParty</button>           
                <button type="button"><a href = "./SearchNewFriendPage.php">searchUser</button>         
                <button type = "button"><a href = "../partyRelated/SearchExistingParty.php">searchExistParty</button>           
                <button type = "button"><a href = "./userInformationPage.php">Profile</button>     
                <button type = "button"><a href = "./interfaceOfFriendRequest.php">friendRequest</button>                              
                <button type = "button"><a href = "../partyRelated/existingPartyList.php"></button>         
                <button type = "button"><a href = "./logout.php">logout</button> 
                <button type = "button"><a href = "./userPage.php">user page</button>        </div>  
            <span style = "font-size:30px;cursor:pointer" onclick = "openNac()">&#9776;</span>
        </div>    
        <script>
            function openNav() {
                document.getElementById("x-side-nav").style.width = "250px";   
            
            }     
            function closeNav() {
                document.getElementById("x-side-nav").style.width = "0";
            }

        </script>
    </body>
</html>


