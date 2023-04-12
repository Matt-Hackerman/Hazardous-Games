<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('css/games/KnuckleBones.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ url('JavaScript/KnuckleBones.js') }}"></script>
    <title>Kucklebones</title>
</head>
<body>
    <div class="startPopup-Container">
        <div class="startPopup">
            <div class="information">
                <h1>KnuckleBones</h1>
                <p>A game of risk and rewards</p>
                <p>Scores are the total of all dice on your board</p>
                <p><span class="diceDouble">Doubles</span> and <span class="diceTriple">Triples</span> can be made in each column and<br> are worth 2x and 3x respectively</p>
                <p>Try and get a higher score then your opponent!<br><br>Click below to begin</p>
                <button id="begin">Begin</button>
            </div>
        </div>
    </div>


    <div class="winPopup-Container" style="display: none">{{-- Placeholder Win Splash Screen --}}
        <div class="winPopup">
            <h1 class="winnerName">Tie</h1>
            <h1 class="scoreCheck">56 - 56</h1>
            <button id="restart">Play Again</button>
        </div>
    </div>


    <div class="main-container">
        <div class="emptyCorner">{{-- empty --}}</div> 
        <div class="gameBoard-Container AI">{{-- AI Game Board --}}
            <div class="gameBoard">
                <div class="row3 col1 AI gameBoard-Tile"></div>
                <div class="row3 col2 AI gameBoard-Tile"></div> {{-- Top row --}}
                <div class="row3 col3 AI gameBoard-Tile"></div>

                <div class="row2 col1 AI gameBoard-Tile"></div>
                <div class="row2 col2 AI gameBoard-Tile"></div>
                <div class="row2 col3 AI gameBoard-Tile"></div>

                <div class="row1 col1 AI gameBoard-Tile"></div>
                <div class="row1 col2 AI gameBoard-Tile"></div>
                <div class="row1 col3 AI gameBoard-Tile"></div>

                <div class="col1total totals">
                    <h3 class="columnScore col1 AI">0</h3>
                </div>
                <div class="col2total totals">
                    <h3 class="columnScore col2 AI">0</h3>
                </div>
                <div class="col3total totals">
                    <h3 class="columnScore col3 AI">0</h3>
                </div>
            </div>
            <div class="gameBoard-Mask" id="AIMask"></div>
            
        </div>
        <div class="diceBoard-Container AI">{{-- AI Dice --}}
            <div class="diceBoard">
                <img class="dice" id="AIDice" src="">
            </div>
        </div>
        <div class="portrait-Container Player">{{-- Player Portrait and Score --}}
            <img class="portrait" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Blank_man_placeholder.svg/2048px-Blank_man_placeholder.svg.png">
            <h3>Player 1</h3>
            <h3 class="score Player">0</h3>
        </div>
        <div class="emptyCenter">{{-- empty --}}</div> 
        
        <div class="portrait-Container AI">{{-- AI Portrait and Score --}}
            <img class="portrait" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Blank_man_placeholder.svg/2048px-Blank_man_placeholder.svg.png">
            <h3>Player 2</h3>
            <h3 class="score AI">0</h3>
        </div>

        <div class="diceBoard-Container Player">{{-- Player Dice --}}
            <div class="diceBoard">
                <img class="dice" id="PlayerDice" src="">
            </div>
        </div>
        <div class="gameBoard-Container Player">{{-- Player Game Board --}}
            <div class="gameBoard">
                <div class="col1total totals">
                    <h3 class="columnScore col1 Player">0</h3>
                </div>
                <div class="col2total totals">
                    <h3 class="columnScore col2 Player">0</h3>
                </div>
                <div class="col3total totals">
                    <h3 class="columnScore col3 Player">0</h3>
                </div>
                <div class="row1 col1 Player gameBoard-Tile"></div>
                <div class="row1 col2 Player gameBoard-Tile"></div> {{-- Top row --}}
                <div class="row1 col3 Player gameBoard-Tile"></div>
                
                <div class="row2 col1 Player gameBoard-Tile"></div>
                <div class="row2 col2 Player gameBoard-Tile"></div>
                <div class="row2 col3 Player gameBoard-Tile"></div>

                <div class="row3 col1 Player gameBoard-Tile"></div>
                <div class="row3 col2 Player gameBoard-Tile"></div> 
                <div class="row3 col3 Player gameBoard-Tile"></div>

            </div>
            <div class="gameBoard-Mask" id="PlayerMask"></div>
        </div>
        <div class="emptyCorner">{{-- empty --}}</div>
    </div>
</body>
</html>