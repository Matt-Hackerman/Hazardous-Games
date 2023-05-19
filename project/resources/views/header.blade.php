<?php
    if(!isset($_SESSION)) { 
        session_start(); 
    }

    if(isset($_SESSION['UserID'])){
        $currentUser = DB::select('select Username from users where UserID = '.$_SESSION['UserID']);
        $currentUser = json_decode(json_encode($currentUser), true)[0]['Username'];
    }else{
        $currentUser = "Guest";
    }
?>

<html>
    <head>
        <title>Hazardous Games Home</title>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/grid.css">
        <link href="https://fonts.cdnfonts.com/css/army-rust" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="../images/hazardous-games-logo.png">
    </head>
    
    <body class="dark">
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
                        <li><a href="/">Home</a></li>
                        <?php 
                            if(isset($_SESSION['UserID']) AND $_SESSION['UserID'] != null){
                                echo '<li><a href="/premium">Premium</a>
                                    </li><li><a href="/api/logout">Logout</a></li>';
                            }else{
                                echo '<li><a href="/login">Login</a></li>
                                <li><a href="/signup">SignUp</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="user-con">
                <div class="userTri">
                    <img src="../images/triangle.png" alt="triangle">
                </div>
                <div class="user">
                    <p>{{ $currentUser }}</p>
                </div>
            </div>
        </header>
        
        <main>
            @yield('content')
            
        </main>
        <script src="../JavaScript/main.js"></script>
    </body>
</html>