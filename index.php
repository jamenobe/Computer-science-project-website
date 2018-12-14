<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style sheet.css" type="text/css"/>
    <link rel="shortcut icon" href="images/Untitled-1.ico" type="image/x-icon">
<!-- links to google fonts, bootstrap and the style sheet -->
<body>

<nav class="navbar navbar-default navbar-static-top"> <!-- creates the start of the Nav bar and how it will act on the page -->
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">PC Builder</a>
        </div>

        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Start</a></li> <!--all the links to the different pages on the site -->
            <li><a href="CPU_page.php">CPU</a></li>
            <li><a href="#">Motherboard</a></li>
            <li><a href="#">Case</a></li>
            <li><a href="#">RAM</a></li>
            <li><a href="#">GPU</a></li>
            <li><a href="#">PSU</a></li>
            <li><a href="Login_Page.php">Login</a></li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2" style=""></div>
        <div class="col-sm-8 col-centered" style="">

            <h1 >PC Spec Builder</h1>

        </div>
    </div>
    <br/>
    <div class="row">

        <div class="col-sm-3" style=""></div>
        <div class="col-sm-6" style="" align="center">

            <p>
               This website will allow you to follow a number of steps,
                which will take you through choosing every part for
                you computer, ensuring that while you are creating the
                specification for your computer system that you don't
                miss any parts.
            </p>

        </div>

    </div>
    <br/>
    <div class="row">

        <div class="col-sm-2" style=""></div>
        <div class="col-sm-8" style="" align="center">

            <a class="btn btn-primary" href="CPU_page.php" role="button">Start</a>

        </div>

    </div>
</div>


</body>

</head>