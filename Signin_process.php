<a class="btn btn-primary" href="index.php" role="button">Back</a>
<?php

function Signup()
{

    $conn = mysqli_connect("192.168.43.207", "root", "password", "project");

    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if (!duplicate($conn, $username))
    {

        $query = "INSERT INTO project.user (Username, Password_hash) VALUES ('$username', '$password_hash')";

        mysqli_query($conn, $query);

    }
    else
    {

        echo "The password or username was invalid"; /*says to the user that their username or password was invalid*/

    }

}


Signup();

function duplicate($conn, $username)
{

    $query = "SELECT * FROM user WHERE Username = '$username'";

    $result = mysqli_query($conn, $query);
    $numRows = mysqli_num_rows($result);

    if ($numRows > 0)
    {

        return true;

    }
    else
    {

        return false;

    }

}
?>