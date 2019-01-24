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

    <div class="row">

        <div class="col-sm-1"></div>

        <div id="table_div" class="col-sm-4" align="center">
            <table> <!-- creates the table for the name and value of the processors -->
                <tr>

                    <th>CPU name</th>
                    <th>price</th>

                </tr>
                <?php
                /*function fetch_cpu_data()
                {
                    $conn = mysqli_connect("192.168.43.207", "root", "password", "project");
                    if ($conn->connect_error) {

                        die("connection Failed:" . $conn->connect_error);

                    }
                    $sql = "SELECT Name, Price from cpu_table";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            // This is where you output everything

                        }

                    }
                }
                fetch_cpu_data();*/


                // Mocking up the database
                $result = [

                        [

                                "ID" => "1",
                                "Vendor" => "Intel",
                                "Price" => "£269",
                                "Name" => "I5-8600k",
                                "description" => "9MB cache, 3.6ghz",
                                "Socket" => "LGA 1151",

                        ],
                        [

                            "ID" => "2",
                            "Vendor" => "Intel",
                            "Price" => "£359",
                            "Name" => "I7-8700k",
                            "description" => "12MB cache, 3.7ghz",
                            "Socket" => "LGA 1151",

                        ]

                ];

                // Would use fetch_assoc() function if result from database
                foreach ($result as $row) {

                    echo "<tr>";
                    echo "<td><a onclick='SetCPU(`" . $row["ID"] . "`)'>" . $row["Vendor"] . " " . $row["Name"] .  "</a></td>";
                    echo "<td>" . $row["Price"] . "</td>";
                    echo "</tr>";

                }

                ?> <!-- the php code that links the database to the page, fetches
                 the values on the database table and displays them on the website-->

            </table>
        </div>

        <div class="col-sm-6" align="center">



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