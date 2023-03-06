<html>
    <head>
        <title>signup</title>
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <main class="main">
        
        <?php if($_SESSION['error'] !== null){
            echo "Email and Username must be unique"
        } ?>
            <form action="/api/users" method="POST"  class="signupContainer">
                @csrf
                <h1>Create Account</h1>

                <input type="text" placeholder="First Name" name="FName" required>
                <input type="text" placeholder="Last Name" name="LName" required>
                <input type="text" placeholder="Username" name="Username" required>
                <input type="email" placeholder="Email" name="Email" required>
                <input type="password" placeholder="Password" name="Password" required>
                <input type="submit" value="Create">
            </form>
        </main>
    </body>
</html>