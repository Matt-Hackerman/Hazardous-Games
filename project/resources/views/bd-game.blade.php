<html>
    <head>
        <title>Bomb Defusal</title>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../game-css/bdGame.css">
        <link href="https://fonts.cdnfonts.com/css/exedore" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/arcade-classic" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="gameStart">
            <div class="directions">
                <h1>Welcome To Bomb Defusal Cadet!</h1>
                <div class="direction-galla">
                    <p class="page-1">
                        We have issued you military grade tools and a hand book with information pertaining to all kinds of explosive devices. If you
                        are unsure of how to precede look to your hand book for more information, remember to take your time you only get 
                        one shot. Good Luck Cadet!
                    </p>
                    <div class="page-2">
                        <h1>Hand Book Controls</h1>
                        <p>
                            Click on hand book to open and close, D can also open the Hand Book and A will close the Hand Book.
                        </p>
                        <h1>Tool Controls</h1>
                        <p>
                            You select tools by clicking on them, once selected you can click on items in the mini game to preform 
                            an action. After you are finished using the tool click on the tool to de-select it, you can only have one 
                            tool selected at a time.
                        </p>
                    </div>
                </div>
                <div class="button-con">
                    <button id="prev" class="arrow-btn hidden"><ion-icon name="caret-back-outline"></ion-icon></button>
                    <button id="next" class="arrow-btn"><ion-icon name="caret-forward-outline"></ion-icon></button>
                </div>
                <button class="start">Begin</button>
            </div>
        </div>

        <div class="handBook-con">
            <div class="handBook">
                <div class="handBook-info">
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="" alt="mini-game-1">
                        </div>
                        <div id="mgInfo-1" class="mini-gameExpand">More Info</div>
                    </div>
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="" alt="mini-game-2">
                        </div>
                        <div id="mgInfo-2" class="mini-gameExpand">More Info</div>
                    </div>
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="" alt="mini-game-3">
                        </div>
                        <div id="mgInfo-3" class="mini-gameExpand">More Info</div>
                    </div>
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="" alt="mini-game-4">
                        </div>
                        <div id="mgInfo-4" class="mini-gameExpand">More Info</div>
                    </div>
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="" alt="mini-game-5">
                        </div>
                        <div id="mgInfo-5" class="mini-gameExpand">More Info</div>
                    </div>
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="" alt="mini-game-6">
                        </div>
                        <div id="mgInfo-6" class="mini-gameExpand">More Info</div>
                    </div>
                </div>
            </div>
            <div class="openBook" title="Hand Book">> Hand Book ></div>
        </div>

        <div class="mini-gameInfo-Expanded"></div>

        <div class="gameOver hidden"></div>

        <div class="screenCrack hidden"></div>

        <div class="endScreen hidden"></div>

        <div class="scoreCard hidden">
            <h1>game over</h1>
            <div class="quote">"They're goin' ta bury what's left of ye in a soup can!"</div>
            <h2>Mini Game 1:<p>Failure</p></h2>
            <h2>Mini Game 2:<p>Failure</p></h2>
            <h2>Mini Game 3:<p>Failure</p></h2>
            <button id="retry" class="scoreCard-btn">Play Again?</button>
        </div>

        <div class="bdGame-grid">
            <div class="tool-bar">
                <div id="wire" class="tool" title="Wire Cutters">
                    <img src="../images/wire-tool.png" alt="wire cutters">
                </div>
                <div id="invert" class="tool" title="Color Inverter">
                    <img src="../images/invert-tool.png" alt="inverter">
                </div>
                <div id="pry" class="tool" title="Pry Tool">
                    <img src="../images/pry-tool.png" alt="pry tool">
                </div>
                <div id="hacking" class="tool" title="Hacking Device">
                    <img src="../images/hacking-tool.png" alt="hacking device">
                </div>
            </div>

            <div class="bd-con">
                <div class="bd-grid">
                    <div class="timer-con">
                        <div class="timer"><p>5.00.00</p></div>
                        <div class="lights-con">
                            <div id="l1" class="light"></div>
                            <div id="l2" class="light"></div>
                            <div id="l3" class="light"></div>
                        </div>
                    </div>

                    <div id="mg1" class="mini-game">

                    </div>
                    <div id="mg2" class="mini-game">

                    </div>
                    <div id="mg3" class="mini-game">

                    </div>
                </div>
            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="../JavaScript/main.js"></script>
        <script src="../JavaScript/bdGame.js"></script>
    </body>
</html>