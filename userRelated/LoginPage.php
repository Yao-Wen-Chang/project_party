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
            .login-block {
                text-align: center;    
                box-sizing: inherit;
                width: 25%;
            }
            .sign-in-up {


            }
            .sign-in {

            }
            .sign-up {

            }
            .info-input-cols {

            }

        </style>
        <script>
            function UserLoginForm(evt, signForm) { 
                btnContent = document.getElementByClassName("btnContent");
                for(i = 0; i < btnContent.length; i++) 
                    btnContent[i].style.display = "none";
                btnLink = document.getElementByClassName("btnLink");    
                for(i = 0; i < btnLink.length; i++) 
                    btnLink[i].style.display = "none";
                document.getElementById(signForm).style.display = "block";
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
                <form action="#" method="post">
                    <label>Email: </label>
                    <input type="text" name="email"><br>

                    <label>Password: </label>
                    <input type="text" name="password"><br>

                    <label>Username: </label>
                    <input type="text" name="username"><br>

                    <label>Gender: </label>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female<br>
                    
                    <label>Birth: </label>
                    <input type="date" id="birth" name="birth"><br>        

                    <label>Password: </label>
                    <input type="text" name="password"><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>

</html>
