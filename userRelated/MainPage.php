<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Main Page</title>
    </head>
    <body>
        <div class = "wholePageWrapper">
            <div class = "upperSection">
                Join the Party!
            </div>
            <div class = "middleSection">
                <div class = "buttonOfCreateParty">
                    <button type="button"><a href = "../partyRelated/CreatePartyInterface.html">Create Party</button>
                </div> 
                <div class = "buttonOfSearchUser">   
                    <button type="button"><a href = "./SearchNewFriendPage.php">Search User</button>
                </div>   
                <div class = "buttonOfSearchParty"> 
                    <button type = "button"><a href = "../partyRelated/SearchExistingParty.php">Party List</button>
                </div>
                <div class = "buttonOfProfile">    
                    <button type = "button"><a href = "./userInformationPage.php">Profile</button>
                </div>    
                <div class = "buttonOfFriendRequest">    
                    <button type = "button"><a href = "./interfaceOfFriendRequest.php">Friend Request</button>                   
                </div> 
                <div class = "buttonOfPartyRequest">    
                    <button type = "button"><a href = "../partyRelated/existingPartyList.php">Party Request</button>
                </div>   
            <div class = "buttonSection">
                This website is create by Wen
            </div>
        </div>
    </body>
</html>
<style>
.upperSection {
    background-color: black;
    opacity: 1;
    border: 50px, 200px, 50px, 200px;
    box-sizing: border-box;
}

.middleSection {
    background-color: white;

}

.buttonSection {
    background-color: black;
    opacity: 1;
    border: 50px, 200px, 50px, 200px;

}

.buttonOfCreateParty {
    border-radius: 15px;
}
.buttonOfSearchUser {
    border-radius: 15px;
}

.buttonOfSearchParty {
    border-radius: 50px, 15px, 5px, 30px;
}

.buttonOfProfile {
    border-radius: 15px 50px 30px 5px;

}
</style>


