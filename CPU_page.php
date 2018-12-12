<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style sheet.css", type="text/css"/>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <!-- links to google fonts, bootstrap and the style sheet -->
    <meta charset="utf-8">

    <title>CPU 2</title>

</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">

        <div class="navbar-header">

            <a class="navbar-brand" href="index.php">PC Builder</a>

        </div>

        <ul class="nav navbar-nav">

            <li><a href="index.php">Start</a></li>
            <li class="active"><a href="CPU page.php">CPU</a></li>
            <li><a href="#">Motherboard</a></li>
            <li><a href="#">Case</a></li>
            <li><a href="#">Ram</a></li>
            <li><a href="#">GPU</a></li>
            <li><a href="#">PSU</a></li>
        </ul>

    </div>

</nav>

<div class="container-fluid">

    <div class="row" align="center">

        <h2>Choose which CPU you want</h2>

    </div>

    <div class="row">

        <div class="col-sm-1"></div>

        <div id="table_div" class="col-sm-4" align="center">
            <table> <!-- creates the table for the name and value of the processors -->
                <tr>

                    <th>CPU name</th>
                    <th>price</th>

                </tr>
                <?php
                $conn = mysqli_connect("192.168.43.207", "root", "password", "project");
                if ($conn-> connect_error){

                    die("connection Failed:". $conn-> connection_error);

                }
                $sql = "SELECT Name, Price from cpu_table";
                $result = $conn-> query($sql);
                if($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr><td><a>" .$row["Name"] ."</a></td><td>" .$row["Price"] ."</td></tr>";
                    }

                }
                ?> <!-- the php code that links the database to the page, fetches
                 the values on the database table and displays them on the website-->

            </table>
        </div>

        <div class="col-sm-6" align-"center">



    </div>

</div>

</div>

</body>

</html>