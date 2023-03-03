<?php
    if(!isset($_SESSION)) { 
        session_start(); 
    }
?>
@yield('header')
<html>
    <head>
        <title>Hazardous Games Home</title>
        <link rel="stylesheet" href="../main.css">
        <link rel="stylesheet" href="../home.css">
        <link rel="stylesheet" href="../grid.css">
        <link href="https://fonts.cdnfonts.com/css/army-rust" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </head>
    
    <header>
        <div class="nav-con">
            <div class="logo-con">
                <div class="logo">
                    <img src="../images/hazardous-games-logo.png" alt="Hazardous Games">
                </div>
                <div class="logo-text">
                    <p>GAMES</p>
                </div>
            </div>
            <div class="hazdImg">
                <img src="../images/hazardImg.jpg" alt="hazard.jpeg">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Premium</a></li>
                    {{-- <li><a href="#">Login</a></li>
                    <li><a href="#">SignUp</a></li> use when the user is a guest--}}
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="user-con">
            <div class="userTri"></div>
            <div class="user">
                <p>Guest User</p>
            </div>
        </div>
    </header>
    @yield('content')
    <body>
        

        <script src="../main.js"></script>
    </body>
    @yield('footer')
</html>