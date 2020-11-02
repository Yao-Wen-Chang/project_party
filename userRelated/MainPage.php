<!DOCTYPE html>
<html>
    <head>
        <title>Let's Party</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        
        <div class = "header">
            Let's Party
        </div>
        <div class = "navSection">
            
                <button type="button" disabled></button>                      
                <button type="button"><a href = "../partyRelated/CreatePartyInterface.html">createParty</button>           
                <button type="button"><a href = "./SearchNewFriendPage.php">searchUser</button>         
                <button type = "button"><a href = "../partyRelated/SearchExistingParty.php">searchExistParty</button>           
                <button type = "button"><a href = "./userInformationPage.php">Profile</button>      
                <button type = "button"><a href = "./interfaceOfFriendRequest.php">friendRequest</button>                              
                <button type = "button"><a href = "../partyRelated/existingPartyList.php"></button>         
        </div>  
    </body>
</html>


<style>

    body {
        background-image: url("../backgroundPhoto/mainPage.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;

    }
    .header {
        background-color: black;
        background-attachment: fixed;
        background-size: cover;
        text-align: center;
    }
    .navSection {
        background-attachment: fixed;
        background-size: cover;
        overflow: hidden;
        background-color: #333;
    }

    .navSection button {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        background-position: center;
    }
    
    .homeBtn {
        background-image: url("../icon/home.png");
        width: 25px;
        height: 25px;

    }

    .buttonOfCreateParty {
        background-image: url("../icon/home.png");
        width: 25px;
        height: 25px;
    }
    .buttonOfSearchUser {
        background-image: url("../icon/home.png");
        width: 25px;
        height: 25px;
    }

    .buttonOfSearchParty {
        background-image: url("../icon/home.png");
        width: 25px;
        height: 25px;;
    }

    .buttonOfProfile {
        background-image: url("../icon/home.png");
        width: 25px;
        height: 25px;

    }
</style>


