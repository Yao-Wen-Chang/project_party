<?php
    require "../init.php";



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login page.php</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html {
                font-size: 15px;
                line-height: 1.5;
                box-sizing: border-box;
            }
            body {
                background-image: url("../backgroundPhoto/LoginPageBackground.jpg");
                background-size: cover;

            }
            .centralBlock {
                text-align: center;    
                box-sizing: inherit;
                width: 40%;
                float: left;
            }
            .btn {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }
            .btn button {
                background-color: inherit;
                float: inherit;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }
            .btn button:hover {
                background-color: #ddd;
            }
            .btn button.active {
                background-color: #ccc;
            }
            .btnContent {
                float: inherit;
                display: none;
                margin: 20px 30px;
                
                box-sizing: border-box; 
            }
        </style>
        <script>
            function UserLoginForm(evt, signForm) { 

                var i, btnLink, btnContent;
                btnContent = document.getElementsByClassName("btnContent");
                for(i = 0; i < btnContent.length; i++) 
                    btnContent[i].style.display = "none";
                btnLink = document.getElementsByClassName("btnLink");    
                for(i = 0; i < btnLink.length; i++) 
                    btnLink[i].className = btnLink[i].className.replace(" active", "");
                document.getElementById(signForm).style.display = "block";
                evt.currentTarget.className += " active";
            }
                
        </script>
    </head>
    <body>
        <div class="centralBlock">
            <div class="btn">
                <button class="btnLink" onclick="UserLoginForm(event, 'signIn')">Sign In</button>
                <button class="btnLink" onclick="UserLoginForm(event, 'signUp')">Sign Up</button>
            </div>
            <div id="signIn" class="btnContent">
                <form action="LoginValidation.php" method="post">
                    <label>Account: </label>
                    <input type="text" name="email"><br>
                    <label>Password: </label>
                    <input type="text" name="password"><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div id="signUp" class="btnContent">
                <form action="SignUp.php" method="post">

                    <label>Username: </label>
                    <input type="text" name="username"><br>

                    <label>Email: </label>
                    <input type="text" name="email"><br>

                    <label>Password: </label>
                    <input type="text" name="password"><br>

                    <label>Gender: </label>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female<br>
                    
                    <label>Birth: </label>
                    <input type="date" id="birth" name="birth"><br>        

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>

    </body>

</html>
