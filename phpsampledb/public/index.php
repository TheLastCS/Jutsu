<?php
    session_start();
    if(isset($_SESSION["user_email"])){
        header("Location: home.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>PHP Sample</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="../src/css/main.css">
    <script type="text/javascript" src="../src/js/auth.js"></script>
</head>
<body>
    <div class="signup-form">
        <form id="signinForm" method="get" onsubmit="signinSubmit(event)">
            <h2>Sign In</h2>
            <p>Please fill in this form to sign in to your account!</p>
            <hr>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input type="submit" name="btnsignin" class="btn btn-primary btn-lg" value="Sign In"/>
            </div>
        </form>
        <div class="hint-text">Don't have an account? <a href="signup.php">Sign up here</a></div>
    </div>
</body>
</html>