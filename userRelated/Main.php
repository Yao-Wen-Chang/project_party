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
                padding: 0 8px;
                box-sizing: inherit;
                float: left;
            }
            .search-bar-container {
                background-color: #fff;
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                border-radius: 4px;
                box-sizing: inherit;
            }
            .search-bar {
                padding: 8px 16px;
                box-sizing: inherit;
                border: 1px solid;
            }
            .search-icon {
                border: none;
                display: inline-block;
                padding: 8px 16px;
                vertical-align: middle;
                overflow: hidden;
                text-decoration: none;
                color: inherit;
                background-color: inherit;
                text-align: center;
                cursor: pointer;
                white-space: nowrap;

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
                    <h4 class="user-name">avatar</h4>
                    <p class="user-img-container">
                        <img class="user-img" src="#" style="height: 106px;width: 106px"></img>    
                    </p>
                    <hr>
                    <p>
                        <i class="fa fa-pencil pen-icon"></i>
                        <!--put occuation var here-->
                    </p>
                    <p>
                        <i class="fa fa-home hone-icon"></i>
                        <!--put location var here-->
                    </p>
                    <p>
                        <i class="fa fa-birthday-cake cake-icon"></i>
                        <!--put birth var here-->
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
                        <input placeholder="Search...">
                        <button type="submit"><i class="fa fa-search search-icon"></i></button>
                    </div>
                </div> 
                <div　class="party-list">
                </div>

            </div>
        </div>
    </body>
</html>
