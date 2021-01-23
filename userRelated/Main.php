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
                padding: 0.01em 16px;

            }
            .profile {
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                color: #000;
                background-color: #fff;
                border-radius: 4px;
                box-sizing: inherit;

            }
        </style>
    <head>
    <body>
        <div class="top-side">
            <a class="nav-bar"><i class="fa fa-bars"> </i></a>
            <a class="user-search"><i class="fa fa-search"> </i></a>
            <a class="notification" href="#"><i class="fa fa-bell-o"></i></a>
            <a class="log-out" href="#"><i class="fa fa-power-off"></i></a>
        </div>
        <div class="page-container">
            <div class="left-col">
                <div class="profile">
                    <img class="user-img" src="#" style="height: 106px;width: 106px"></img>    
                    <p><i class></i></p>
                </div>
            </div>
        </div>
    </body>
</html>
