<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require "../init.php";

    session_start();
    $allPartyObj = $partyObj->getAllParty()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Main page.php</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            
        </script>
        <style>
            html {
                font-size: 15px;
                line-height: 1.5;
                box-sizing: border-box;

            }
            body {
                background-color: #f5f7f8;
                font-size: 15px;
                margin: 0;
                box-sizing: inherit;
                line-height: 1.5;

            }
            .top-side {
                top: 0;
                position: fixed;
                width: 100%;
                background-color: #000;
                box-sizing: inherit;
                font-size: 15px;
            }
            .nav-bar {
                color: white;
                font-size: 18px;
                width: auto;
                border: none;
                box-sizing: inherit;
                float: left;
                padding: 12px 24px;
            }
            .user-search {
                color: white;
                font-size: 18px;
                width: auto;
                border: none;
                float: left;
                padding: 12px 24px;
            }
            .notification {
                color: white;
                font-size: 18px;
                width: auto;
                border: none;
                float: left;
                padding: 12px 24px;
            }
            .party-create-btn {
                color: white;
                font-size: 20px;
                width: auto;
                border: none;
                float: left;
                padding: 12px 24px;

            }
            .party-create-block {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }
            .container {
                padding: 16px;
            }
            .party-info {
                background-color: #fefefe;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }

            .log-out {
                color: white;
                font-size: 18px;
                width: auto;
                border: none;
                float: right;
                padding: 12px 24px;
            }
            .page-container {
                max-width: 1400px;
                margin-top: 80px;
                padding: 0.01em 16px;
                box-sizing: inherit;
                margin-left: auto;
                margin-right: auto;



            }
            .left-col {
                width: 25%;
                float: left;
                box-sizing: inherit;

            }
            .profile {
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                color: #000;
                background-color: #fff;
                border-radius: 4px;
                box-sizing: inherit;
                padding: 0.01em 16px;

            }
            .user-name {
                text-align: center;

            }
            .user-img-container {
                text-align: center;
                box-sizing: inherit;
            }
            .user-img {
                vertical-align: middle;
                height: 106px;
                width: 106px;
                border-style: none;
                box-sizing: inherit;
                border-radius: 50%; 
            }
            .pen-icon {
                width: 1.29em;
                text-align: center;
                color: #607d8b;
                margin-right 16px;
                box-sizing: inherit;
            }
            .home-icon {
                width: 1.29em;
                text-align: center;
                color: #607d8b;
                margin-right 16px;
                box-sizing: inherit;
            }
            .cake-icon {
                width: 1.29em;
                text-align: center;
                color: #607d8b;
                margin-right 16px;
                box-sizing: inherit;
            }
            .party-relate {
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                color: #000;
                background-color: #fff;
                border-radius: 4px;
                box-sizing: inherit;
                padding: 0.01em 16px;
            }

            .event-icon {
                width: 1.29em;
                text-align: center;
                color: #607d8b;
                margin-right 16px;
                box-sizing: inherit;
            }
            .photo-icon {
                width: 1.29em;
                text-align: center;
                color: #607d8b;
                margin-right 16px;
                box-sizing: inherit;
            }
            .history-icon {
                width: 1.29em;
                text-align: center;
                color: #607d8b;
                margin-right 16px;
                box-sizing: inherit;
            }
            .recommender {
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                color: #000;
                background-color: #fff;
                border-radius: 4px;
                box-sizing: inherit;
                padding: 0.01em 16px;
            }
            .title-recommender {
                text-align: center;
            }
            .mid-col {
                width: 60%;
                padding: 0px 16px;
                box-sizing: inherit;
                float: left;
            }
            .search-bar-container {
                background-color: #fff;
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                border-radius: 4px;
                box-sizing: inherit;
                border: 1px solid;
            }

            .search-bar {
                text-align: center;
                padding: 8px 16px;
                box-sizing: inherit;

            }
            .search-input {
                box-sizing: inherit;
                width: 70%;

            }
            .search-btn {
                display: inline-block;
                padding: 8px 16px;
                margin: 0px;
                background-color: inherit;

            }

            .party-list {
                text-align: center;
                box-sizing: inherit; 
                padding: 0px 0px;
               
            }
            .party-info {
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                color: #000;
                background-color: #fff;
                border-radius: 20px;
                box-sizing: inherit;
                padding: 8px 16px;
                margin: 10px 0px;
            .party-intro {

                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                color: #000;
                background-color: #fff;
                border-radius: 4px;
                box-sizing: inherit;
                padding: 0.01em 16px;

            }
            .join-party {

            }
            .btn-join-party {


            }
        </style>
    <head>
    <body>
        <div class="top-side">
            <a class="nav-bar"><i class="fa fa-bars"> </i></a>
            <a class="user-search"><i class="fa fa-search"> </i></a>
            <a class="notification" href="#"><i class="fa fa-bell-o"></i></a>
            <button class="party-create-btn" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-plus-square-o"></i></button>
            <div id="id01" class="party-create-block">

                <form class="party-info animate" action="../partyRelated/CreateParty.php" method="post">
                    <div class="container">
                        <label for="party-name"><b>Party Name</b></label>
                        <input type="text" placeholder="Enter party name" name="partyName" required>

                        <label for="party-type"><b>Party Type</b></label>
                        <input type="text" placeholder="Enter party type" name="partyType" required>

                        <label for="loc"><b>Location</b></label>
                        <input type="text" placeholder="Enter location" name="loc" required>

                        <label for="party-time"><b>Party Time</b></label>
                        <input type="date" placeholder="choose party hold time" name="partyTime" required>

                        <label for="limit-mem"><b>Limit Member</b></label>
                        <input type="number" placeholder="Enter utmost member number" name="limitMem" required>

                        <label for="description"><b>Description</b></label>
                        <input type="text" placeholder="Descript the party" name="description" required>

                        <button type="submit">Create</button>
                    </div>

                </form>
            </div>
            <a class="log-out" href="#"><i class="fa fa-power-off"></i></a>
        </div>
        <div class="page-container">
            <div class="left-col">
                <div class="profile">
                    <h4 class="user-name">avatar</h4>
                    <p class="user-img-container">
                        <img class="user-img" src="#" style="height: 106px;width: 106px"></img>    
                    </p>
                    <hr>
                    <p>
                        <i class="fa fa-pencil pen-icon"></i>
                        <?php
                            echo $_SESSION["job"];
                        ?>
                    </p>
                    <p>
                        <i class="fa fa-home hone-icon"></i>
                        <?php
                            echo $_SESSION["city"];
                        ?>
                    </p>
                    <p>
                        <i class="fa fa-birthday-cake cake-icon"></i>
                        <?php
                            echo $_SESSION["birth"];
                        ?>
                    </p>
                </div>
                <br>
                <div class="party-relate">
                    <p> 
                        <i class="fa fa-calendar event-icon">   My Event</i>
                        <!--put occuation var here-->
                    </p>
                    <p>
                        <i class="fa fa-photo photo-icon">  My Photo</i>
                        <!--put location var here-->
                    </p>
                    <p>
                        <i class="fa fa-history history-icon">  History Event</i>
                        <!--put birth var here-->
                    </p>

                </div>
                <br>
                <div class="recommender">
                    <h4 class="title-recommender">Interesting Events</h4>
                </div>
            </div>
            <div class="mid-col">
                <div class="search-bar-container">
                    <div class="search-bar">
                        <input class="search-input" placeholder="Search...">
                        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div> 
                <div　class="party-list">
                    <?php
                        
                        //Party_name , Holder , Party_type
                        //Party_time , Location , Limit_members_num , Curr_members_num
                        //Description    
                        foreach($allPartyObj as $partyBlock) {
                            echo '
                                <a href="../partyRelated/PartyPage.php">
                                    <div class="party-info">
                                        <ol>
                                            <li>'.$partyBlock->Party_name.'</li>
                                            <li>'.$partyBlock->Holder.'</li>
                                            <li>'.$partyBlock->Party_time.'</li>
                                            <li>'.$partyBlock->Location.'</li>
                                        </ol>

                            ';
                            if($partyObj->checkMemberNum($partyBlock->ID)) {  // check whether meet limit number , and display button
                                echo '
                                    <div class="join-party">
                                        <button id="btn-join-party" onclick="JoinParty('.$partyBlock->ID.')"><b>Join The Party</b></button> 
                                    </div>
                                ';

                            }
                            echo '    
                                    </div>
                                </a>
                            ';


                        }


                    ?>
                    <script>
                        

                        function JoinParty(partyID) {
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    //document.getElementsByClassName("join-party")[0].visibility = "hidden"
                                    alert("success");
                                }    
                            };
                            xhttp.open("GET", "../partyRelated/JoinParty.php?q=" + partyID, true);
                            xhttp.send();
                        }
                    </script>
                </div>

            </div>
        </div>
    </body>
</html>
