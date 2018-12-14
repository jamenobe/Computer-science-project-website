<?php
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style sheet.css" type="text/css"/>
    <link rel="shortcut icon" href="images/Untitled-1.ico" type="image/x-icon">
</head>
<Body>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">

        <div class="navbar-header">
<!--            <a class="navbar-brand" href="index.php">PC Builder</a>-->
           <a class="navbar-brand" href="index.php"><img class ="nav-brand" id ="logo" src="images/WEB_LOGO_white.png" width="auto" height="30px"/></a>
        </div>

        <ul class="nav navbar-nav">
            <li><a href="index.php">Start</a></li>
            <li><a href="CPU_page.php">CPU</a></li>
            <li><a href="#">Motherboard</a></li>
            <li><a href="#">Case</a></li>
            <li><a href="#">RAM</a></li>
            <li><a href="#">GPU</a></li>
            <li><a href="#">PSU</a></li>
            <li class="active"><a href="Login_Page.php">Login</a></li>
        </ul>
    </div>
</nav>
<div class="row">

    <div class="col-sm-2" style=""></div>
    <div class="col-sm-8" style="">

        <h1>Login</h1>

    </div>
</div>
<div class="row">


    <div class="col-sm-2" style=""></div>
    <div class="col-sm-8 col-centered" style="">

        <form action="/Login_process.php" method="post">
            Username:<br>
            <input type="text" name="Username" value="" required>
            <br>
            Password:<br>
            <input type="password" name="Password" value="" required>
            <br><br>
            <input type="submit" value="Submit">
        </form>
        <a href="Signin_Page.php">Dont have an account? Sign up here</a>
    </div>


</div>

</Body>



</html>