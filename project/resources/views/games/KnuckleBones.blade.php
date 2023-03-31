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
                <p>Try and get a higher score then your opponent!<br><br>Click below to begin</p>
                <button id="begin">Begin</button>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="emptyCorner">{{-- empty --}}</div> 
        <div class="gameBoard-Container AI">{{-- AI Game Board --}}
            <div class="gameBoard">
                <div class="c1 gameBoard-Tile">

                </div>
                <div class="c2 gameBoard-Tile">

                </div> {{-- Top row --}}
                <div class="c3 gameBoard-Tile">

                </div>

                <div class="b1 gameBoard-Tile">

                </div>
                <div class="b2 gameBoard-Tile">

                </div>
                <div class="b3 gameBoard-Tile">

                </div>

                <div class="a1 gameBoard-Tile">

                </div>
                <div class="a2 gameBoard-Tile">

                </div>
                <div class="a3 gameBoard-Tile">

                </div>

                <div class="row1total totals">
                    <h3 class="columnScore">2</h3>
                </div>
                <div class="row2total totals">
                    <h3 class="columnScore">2</h3>
                </div>
                <div class="row3total totals">
                    <h3 class="columnScore">2</h3>
                </div>
            </div>
            <div class="gameGoard-Mask"></div>
            
        </div>
        <div class="diceBoard-Container AI">{{-- AI Dice --}}
            <div class="diceBoard">
                <img class="dice" id="AIDice" src="">
            </div>
        </div>
        
        <div class="portrait-Container Player">{{-- Player Portrait and Score --}}
            <img class="portrait" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Blank_man_placeholder.svg/2048px-Blank_man_placeholder.svg.png">
            <h3>Player</h3>
            <h3 class="score Player">56</h3>
        </div>
        <div class="winPopup-Container">{{-- Placeholder Win Splash Screen --}}
            <div class="winPopup">
                <h1 class="winnerName">Tie</h1>
                <h1 class="scoreCheck">56 - 56</h1>
            </div>
        </div>
        <div class="portrait-Container AI">{{-- AI Portrait and Score --}}
            <img class="portrait" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Blank_man_placeholder.svg/2048px-Blank_man_placeholder.svg.png">
            <h3>Opponent</h3>
            <h3 class="score AI">56</h3>
        </div>

        <div class="diceBoard-Container Player">{{-- Player Dice --}}
            <div class="diceBoard">
                <img class="dice" id="PlayerDice" src="">
            </div>
        </div>
        <div class="gameBoard-Container Player">{{-- Player Game Board --}}
            <div class="gameBoard">
                <div class="row1total totals">
                    <h3 class="columnScore">2</h3>
                </div>
                <div class="row2total totals">
                    <h3 class="columnScore">2</h3>
                </div>
                <div class="row3total totals">
                    <h3 class="columnScore">2</h3>
                </div>
                
                <div class="c1 gameBoard-Tile">

                </div>
                <div class="c2 gameBoard-Tile">
                    
                </div> {{-- Top row --}}
                <div class="c3 gameBoard-Tile">

                </div>

                <div class="b1 gameBoard-Tile">

                </div>
                <div class="b2 gameBoard-Tile">

                </div>
                <div class="b3 gameBoard-Tile">

                </div>

                <div class="a1 gameBoard-Tile">

                </div>
                <div class="a2 gameBoard-Tile">

                </div>
                <div class="a3 gameBoard-Tile">

                </div>

                
            </div>
        </div>
        <div class="emptyCorner">{{-- empty --}}</div>
    </div>
</body>
</html>