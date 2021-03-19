<?php
    require "../init.php";
    $data = $partyObj->GetPartyInfo(2);
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Main page.php</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html {
                font-size: 15px;
                line-height: 1.5;
                box-sizing: border-box;

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
            .party-block {
                margin: 50px 0px 0px 0px;
                size: 70%;
                text-align: center;
                border-radius: 4px;
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                
            }
            .holder-block {

            }
            .members-block {
                

            }
            .per-member-info {


            }
            .avatar {


            }
            .username {

            }
            .city {

            }
            .age {

            }
            .gender {

            }
            .job {


            }
        </style>
    </head>
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
        <div class="party-block">
            <?php
                echo "dassda";
            ?>
            <div class="holder-block">
                <?php
                     
                ?>                    
            </div>
            <div class="members-block">
                
                <?php
               /* 
                    for($data as $d) {
                        echo '
                            <div class="per-member-info">
                                <div class="avatar">
                                    '.echo. '<img src="data:image/jpeg;base64,'.base64_encode( $d->Avatar ).'"/>'.;.' 
                                </div>
                                <div class="username">
                                    '.$d->Username.'
                                </div>
                                <div class="city">
                                    '.$d->City.'
                                </div>
                                <div class="age">
                                    '.$d->Age.'
                                </div>
                                <div class="gender">
                                    '.$d->Gender.'
                                </div>
                                <div class="job">
                                    '.$d->Job.'
                                </div>

                            </div>
                
                        '


                    }*/
                ?>
            </div>
        </div>
    </body>
</html>