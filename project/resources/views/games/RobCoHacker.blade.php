<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('css/games/RobCoHacker.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ url('JavaScript/RobCoHacker.js') }}"></script>
    <title>RobCo Industries - Terminal</title>
</head>
<body>
    <div>
        <p>RobCo Industries (TM) Termlink Protocol</p>
        <div class="modeSelection">
            <p class="blankLine"></p>
            <p>---------------------------------------</p>
            <p class="blankLine"></p>
            <p class="blankLine"></p>
            <p>Select a difficulty</p>
            <p class="blankLine"></p>
            <p class="diffSelector selectable" id="NoviceDiff">[ Novice ]</p>
            <p class="diffSelector selectable" id="AdvancedDiff">[ Advanced ]</p>
            <p class="diffSelector selectable" id="ExpertDiff">[ Expert ]</p>
            <p class="diffSelector selectable" id="MasterDiff">[ Master ]</p>
        </div>
    </div>
    
</body>
</html>
