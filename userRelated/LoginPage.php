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
            function UserLoginForm(choice) {
                if(choice === "signin") {

                    <form action="LoginValidation.php">
                        <label>Account: </label>
                        <input type="text"><br>
                        <label>Password: </label>
                        <input type="text"><br>
                        <input type="submit" value="Submit">
                    </form>

                }
                else if(choice === "signup") {
                    <form action="#">
                        <label>Email: </label>
                        <input type="text"><br>
                        <label>Password: </label>
                        <input type="text"><br>

                        <input type="submit" value="Submit">
                    </form>
                }
            }
        </script>
    </head>
    <body>
        <div class="login-block">
            <div class="sign-in-up">
                <div class="sign-in">
                    <button value="signin" onclick="UserLoginForm(this.value)">Sign In</button>
                </div>
                
            </div>
            <div class="info-input-cols">
                <form action="LoginValidation.php" method="post">
                    <label>Account: </label>
                    <input type="text" name="email"><br>
                    <label>Password: </label>
                    <input type="text" name="password"><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>

</html>
