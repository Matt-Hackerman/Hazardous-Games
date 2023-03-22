<head>
    <link rel="stylesheet" href="../css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<script>
    $(window).on('load', function() {
        var gridRepeat = Math.floor(($(window).width() * .7) / 210);
        var temp = "repeat(" + gridRepeat + ", 1fr)";
        $('.game-grid').css ('grid-template-columns', temp);
    });

    $(window).on('resize', function() {
        gridRepeat = Math.floor(($(window).width() * .7) / 210);
        console.log(gridRepeat);
        temp = "repeat(" + gridRepeat + ", 1fr)";
        $('.game-grid').css ('grid-template-columns', temp);
    });
</script>

@extends('header')

@section('content')
    <div class="home-Grid">
        <div class="ad-grid"></div>
        <div class="game-grid">
            <?php for($i = 0; $i < 10; $i++) { ?>
                <div class="game-con">
                    <div class="game">

                    </div>
                    <div class="game-title">
                        <h4>Title</h4>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="ad-grid"></div>
    </div>
@endsection
