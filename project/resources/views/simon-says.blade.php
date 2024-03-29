<html>
    <head>
        <title>Simon Says</title>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../game-css/simonSays.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="end-game">
            <div class="end-game-content">
                <div class="user-info">
                    <h1>Game Over</h1>
                    <p id="endScore">0</p>
                    <button class="retry-btn">Play Agian?</button>
                </div>
                <div class="leader-board-con">
                    <h1>Leader Board</h1>
                    <div class="board-items">
                        {{-- <div class="user-name-score">Test</div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="simon-says-grid">
            <div class="ss-stats">Score:<p id="score">0</p></div>

            <div class="ss-cover"></div>

            <div class="ss-grid">
                <div id="a1" class="ss-item"></div>
                <div id="a2" class="ss-item"></div>
                <div id="a3" class="ss-item"></div>
                <div id="b1" class="ss-item"></div>
                <div id="b2" class="ss-item"></div>
                <div id="b3" class="ss-item"></div>
                <div id="c1" class="ss-item"></div>
                <div id="c2" class="ss-item"></div>
                <div id="c3" class="ss-item"></div>
            </div>

            <div class="start-btn-con">
                <button id="start" class="start-btn">Begin</button>
            </div>
        </div>

        <script src="../JavaScript/main.js"></script>
        <script src="../JavaScript/simonSays.js"></script>

    </body>
</html>