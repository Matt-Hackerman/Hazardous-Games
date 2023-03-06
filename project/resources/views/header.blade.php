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
                {{-- <p>Guest User</p> use is no user is signed in --}}
                <p>BigRockMan982</p>
            </div>
        </div>
    </header>
    @yield('content')
    <body class="dark">
        
        
        <script src="../main.js"></script>
    </body>
    @yield('footer')
    <footer>
        <div class="footer-Con">
            <div class="footer-Logo-Con">
                <div class="footer-Logo">
                    <img src="../images/hazardous-games-logo.png" alt="Hazardous Games">
                </div>
                <div class="footer-Logo-Text">GAMES</div>
            </div>
            <div class="footer-Links-Con">
                <div class="footer-about">
                    <h4>HazardousGames.com</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">About Our Ads</a></li>
                        <li><a href="#">Subscription FAQ</a></li>
                        <li><a href="#">Adblock FAQ</a></li>
                        <li><a href="#">Subscription Support</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-Game-Links">
                    <h4>Browse Games</h4>
                    <ul>
                        <li><a href="#">Strategy Games</a></li>
                        <li><a href="#">Skill Games</a></li>
                        <li><a href="#">Number Games</a></li>
                        <li><a href="#">Logic Games</a></li>
                        <li><a href="#">Memory Games</a></li>
                        <li><a href="#">Classic Games</a></li>
                        <li><a href="#">Jigsaw Puzzles</a></li>
                        <li><a href="#">Science Games</a></li>
                        <li><a href="#">Geography Games</a></li>
                    </ul>
                </div>
                <div class="footer-Hazardous-Math">
                    <h4>HazardMath.com</h4>
                    <ul>
                        <li><a href="#">Pre-Algebra Lessons</a></li>
                        <li><a href="#">Algebra Lessons</a></li>
                        <li><a href="#">Pre-Calculus Lessons</a></li>
                        <li><a href="#">Math Dictionary</a></li>
                        <li><a href="#">Lines</a></li>
                        <li><a href="#">Factors and Primes</a></li>
                        <li><a href="#">Decimals</a></li>
                        <li><a href="#">Properties</a></li>
                    </ul>
                </div>
                <div class="footer-Hazardous-More">
                    <h4>More From Hazardous</h4>
                    <ul>
                        <li><a href="#">Coolmath4Kids</a></li>
                        <li><a href="#">Ten Frame Manipulative</a></li>
                        <li><a href="#">Base Ten Blocks Manipulative</a></li>
                        <li><a href="#">Number Line Manipulative</a></li>
                        <li><a href="#">Pattern Blocks Manipulative</a></li>
                        <li><a href="#">Math Quizzes</a></li>
                        <li><a href="#">Coolmath4Teachers</a></li>
                        <li><a href="#">Coolmath4Parents</a></li>
                    </ul>
                </div>
                <div class="footer-Hazardous-Socials">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">TikTok</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
                <div class="site-Settings">
                    <h4>Settings</h4>
                    <select class="lightDark" name="screenMode" id="screen">
                        <option value="dark">Dark Mode</option>
                        <option value="light">Light Mode</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="footer-Copy-Right">
            ©2023 Hazardous Games
        </div>
    </footer>
</html>