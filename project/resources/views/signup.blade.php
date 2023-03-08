<<<<<<< Updated upstream
<html>
    <head>
        <title>signup</title>
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <main class="main">
            <div class="signupContainer">
                <h1>Create Account</h1>
                <input type="text" placeholder="First Name" required>
                <input type="text" placeholder="Last Name" required>
                <input type="text" placeholder="Username" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <input type="button" value="Create">
            </div>
        </main>
    </body>
</html>
=======
<head>
    <title>signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
@extends('header')

@section('content')

<main class="main">


    <form action="/api/users" method="POST"  class="signupContainer">
        @csrf
        <h1>Create Account</h1>

        <?php if(isset($_SESSION['Error']) and $_SESSION['Error'] == "True"){
            echo "Email and Username must be unique";
            unset($_SESSION['Error']);
        } ?>

        <input type="text" placeholder="First Name" name="FName" required>
        <input type="text" placeholder="Last Name" name="LName" required>
        <input type="text" placeholder="Username" name="Username" required>
        <input type="email" placeholder="Email" name="Email" required>
        <input type="password" placeholder="Password" name="Password" required>
        <input type="submit" value="Create">
    </form>
</main>

@endsection
>>>>>>> Stashed changes
