<head>
    <title>signup</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
@extends('header')

@section('content')

<main class="main">


    <form action="/api/premium" method="POST"  class="signupContainer">
        @csrf
        <h1>Purchase Premium</h1>

        <input type="text" placeholder="Credit Card" name="CreditCard" required>
        <input type="date" placeholder="Experiation Date" name="ExpDate" required>
        <input type="text" placeholder="CVV" name="CVV" required>
        <input type="submit" value="Purchase">
    </form>
</main>

@endsection