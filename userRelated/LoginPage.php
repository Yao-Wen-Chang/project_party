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
                box-sizing: inherit;
                width: 40%;
                margin: 300px auto;
                border-width: 10px;
                border-style: solid;
            }
            .btn {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #A0522D;
                opacity: 0.5;
                margin: 5px, auto;
                text-align: center;
            }
            .btn button {
                background-color: inherit;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 20px;
                margin: 10px, auto;
                right: 0;
                top: 0;
                transition: 0.3s;
                font-size: 17px;
                border-width: 2px;
            }
            .btn button:hover {
                background-color: #ddd;
            }
            .btn button.active {
                background-color: #ccc;
            }
            .btnContent {
                display: none;
                box-sizing: border-box; 
                margin
                padding: 20px auto;
                text-align: center;
                background-color: #F0FFFF;
                opacity: 0.5;
            }
            /*.signupBlock {
                margin: 10px auto;

            }*/
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
                    <br><br>
                    <label>Account: </label>
                    <input type="text" name="email"><br><br>
                    <label>Password: </label>
                    <input type="text" name="password"><br><br>
                    <input type="submit" value="Submit"><br><br>
                </form>
            </div>
            <div id="signUp" class="btnContent">
                <form action="SignUp.php" method="post">
                    <br><br>
                    <label>Username: </label>
                    <input type="text" name="username"><br><br>

                    <label>Email: </label>
                    <input type="text" name="email"><br><br>

                    <label>Password: </label>
                    <input type="text" name="password"><br><br>

                    <label>Gender: </label>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female<br><br>
                    
                    <label>Birth: </label>
                    <input type="date" id="birth" name="birth"><br><br>        

                    <label>City: </label>
                    <input type="text" id="city" name="city"><br><br>        

                    <label>Job: </label>
                    <input type="text" id="job" name="job"><br><br>        
                    <input type="submit" value="Submit"><br><br>
                </form>
            </div>
        </div>

    </body>

</html>
