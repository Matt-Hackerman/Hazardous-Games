<head>
    <link rel="stylesheet" href="../css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

@extends('header')

@section('content')
    <div class="home-Grid">
        <div class="filler-grid"></div>
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
        <div class="filler-grid"></div>
    </div>
@endsection
