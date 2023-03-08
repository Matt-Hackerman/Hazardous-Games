<head>
    <link rel="stylesheet" href="../css/home.css">
</head>

@extends('header')

@section('content')
    <div class="home-Grid">
        <div class="ad-grid"></div>
        <div class="game-grid">
            <?php for($i = 0; $i < 10; $i++) { ?>
                <div class="game-container">
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
