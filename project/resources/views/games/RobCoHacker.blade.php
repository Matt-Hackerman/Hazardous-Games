<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('css\games\RobCoHacker.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ url('JavaScript\RobCoHacker.js') }}"></script>
    <title>RobCo Industries - Terminal</title>
</head>
<body>
    <p>RobCo Industries (TM) Termlink Protocol</p>
    <p class="blankLine"></p>
    <p>---------------------------------------</p>
    <p class="blankLine"></p>
    
    <div class="modeSelection">
        <p class="blankLine"></p>
        <p>Select a difficulty</p>
        <p class="blankLine"></p>
        <p class="diffSelector"><span id="NoviceDiff">[ Novice ]</span></p>
        <p class="diffSelector"><span id="AdvancedDiff">[ Advanced ]</span></p>
        <p class="diffSelector"><span id="ExpertDiff">[ Expert ]</span></p>
        <p class="diffSelector"><span id="MasterDiff">[ Master ]</span></p>
    </div>
    
</body>
</html>
