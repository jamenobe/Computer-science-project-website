<a class="btn btn-primary" href="index.php" role="button">Back</a>
<?php

function Login()
{

    $conn = mysqli_connect("192.168.43.207", "root", "password", "project");

    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $query = "SELECT * FROM user WHERE Username = '$username'";

    $result = mysqli_query($conn, $query);

    if ($result)
    {

        $assocArray = mysqli_fetch_assoc($result);

        $hash = $assocArray["Password_hash"];

        if (password_verify($password, $hash))
        {

            echo "Valid account";

        }
        else
        {

            echo "Invalid account";

        }

    }

}

Login();

?>