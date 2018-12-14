<a class="btn btn-primary" href="index.php" role="button">Back</a>
<?php /*starts the PHP*/

function Login()
{

    $conn = mysqli_connect("192.168.43.207", "root", "password", "project");
    /*connects the database to the page*/
    $username = $_POST["Username"]; /*creates a variable called username containing the input of username from the user*/
    $password = $_POST["Password"];/*creates a variable called password containing the input of password from the user*/

    $query = "SELECT * FROM user WHERE Username = '$username'";
    /*creates a variable called query which uses SQL to select all entries in the column username on the Database*/
    $result = mysqli_query($conn, $query);
    /*creates a variable called result which is the result of the query above*/

    if ($result)/*starts an if statement*/
    {

        $assocArray = mysqli_fetch_assoc($result);
        /*this creates an associative array*/

        $hash = $assocArray["Password_hash"];


        if (password_verify($password, $hash)) /*verifies the hash*/
        {

            echo "Valid account";

        }
        else
        {

            echo "Invalid account";
            <a href="Signin_Page.php">Dont have an account? Sign up here</a>
        }

    }

}

Login();

?>