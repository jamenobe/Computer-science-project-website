<!--<?php session_start() ?>-->
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style sheet.css", type="text/css"/>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">

    <link rel="shortcut icon" href="images/Untitled-1.ico" type="image/x-icon">
    <!-- links to google fonts, bootstrap and the style sheet -->
    <meta charset="utf-8">

    <title>CPU</title>

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
            <li><a href="Motherboard_page.php">Motherboard</a></li>
            <li><a href="#">Case</a></li>
            <li><a href="#">Ram</a></li>
            <li><a href="#">GPU</a></li>
            <li><a href="#">PSU</a></li>
            <li><a href="Login_Page.php">Login</a></li>
        </ul>

    </div>

</nav>

<div class="container-fluid">

    <div class="row" align="center">

        <h2>Choose which CPU you want</h2>

    </div>

    <div class="row" align="center">


       <div id="table_div" class="col-sm-5" align="center">
           <table>  <!-- creates the table for the name and value of the processors -->
                <tr>

                    <th>CPU name</th>
                    <th>price</th>

                </tr>
                <?php
                function fetch_cpu_data()
                {
                    $conn = mysqli_connect("192.168.0.24", "root", "password", "project");
                    if ($conn->connect_error) {

                        die("connection Failed:" . $conn->connect_error);

                    }
                    $sql = "SELECT * from cpu_table";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                                echo "<tr>";
                                echo "<td><a onclick='SetCPU(`" . $row["ID"] . "`)'>" . $row["Vendor"] . " " . $row["Name"] .  "</a></td>";
                                echo "<td>" . $row["Price"] . "</td>";
                                echo "</tr>";
                            // This is where everything is outputted, and a cookie is created so that when the user selects an item it is saved

                        }

                    }
                }
                fetch_cpu_data();

                ?>  <!-- the php code that links the database to the page, fetches
                 the values on the database table and displays them on the website -->

            </table>
        </div>

        <div id="gallery-div" class="col-sm-6" align="right">

            <div class="image-gallery">
                <img class="myslides" src="c:\users\jamie noble\phpstormprojects\computer-science-project-website\images\i5_8600k_pic.jpeg" style="width:100%">
                <img class="myslides" src="" style="width:100%">
                <img class="myslides" src="" style="width:100%">
                <img class="myslides" src="" style="width:100%">

                <button class="display-left" onclick="plusdivs(-1)">&#10094;</button>
                <button class="display-right" onclick="plusdivs(1)">&#10095;</button>
            </div>

            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex-1].style.display = "block";
                }
            </script>
        </div>

    </div>

    <div class="row" align="center">

        <div id="next_button" class="col-sm-2" align="right">

            <a class="btn btn-primary" href="Motherboard_page.php" role="button">Next</a>

        </div>

    </div>

<script language="JavaScript">

    function SetCPU(id) {

        document.cookie = "cpu=" + id + ";path=/";
        alert(document.cookie);

    }

    function getCookie(cname) {

        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');

        for(let i = 0; i <ca.length; i++) {

            let c = ca[i];

            while (c.charAt(0) == ' ') {

                c = c.substring(1);

            }

            if (c.indexOf(name) == 0) {

                return c.substring(name.length, c.length);

            }

        }

        return "";
    }

</script>

</body>

</html>