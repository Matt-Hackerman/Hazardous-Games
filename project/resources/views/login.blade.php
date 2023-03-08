
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('css/signup.css') }}">
    <title>Login</title>
</head>

@extends('header')

@section('content')
    <main class="main">
        <form action="/api/login" method="POST" class="signupContainer">
            <h1>Login</h1>
            <?php
                // if(isset($Error) AND $Error == "MainInput"){
                //     echo "<p>Invalid Email / Username</p>";
                // }else if(isset($Error) AND $Error == "Password"){
                //     echo "<p>Incorrect Password</p>";
                // }
            
                if(isset($_SESSION["Error"]) AND $_SESSION["Error"] == "MainInput"){
                    unset($_SESSION['Error']);
                    echo "<p>Invalid Email / Username</p>";
                }else if(isset($_SESSION["Error"]) AND $_SESSION["Error"] == "Password"){
                    unset($_SESSION['Error']);
                    echo "<p>Incorrect Password</p>";
                }
                
            ?>  
            <input type="text" placeholder="Username or Email" name="MainInput" autocomplete="off" required>
            <input type="password" placeholder="Password" name="Password" autocomplete="off" required>
            <input type="submit" value="Login">
        </form>
    </main>
@endsection