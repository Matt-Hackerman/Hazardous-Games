<head>
    <link rel="stylesheet" href="../css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

@extends('header')

@section('content')
    <div class="home-Grid">
        <div class="filler-grid"></div>
        <div class="game-grid">
            <?php foreach($games as $key => $game) { ?>
                <p><?php $key ?></p>
                <form method="get" action="/game" class="game-con">
                    <input type="hidden" value="<?php $game->GameID; ?>">
                    <button class="game-butt">
                        <div class="game">
                            <img src="<?php $game->ThumbURL; ?>">
                        </div>
                        <div class="game-title">
                            <h4><?php $game->Title; ?></h4>
                            <p>Created by <?php $game->Developer; ?></p>
                        </div>
                    </button>
                </form>
            <?php } ?>
        </div>
        <div class="filler-grid"></div>
    </div>
@endsection
