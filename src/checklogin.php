<?php
// FILEPATH: /opt/lampp/htdocs/project_web/src/login.php
    // Connect to the MySQL database
    include('config.php');
// Check if the login form is submitted
session_start();
if ( isset($_POST['username']) && isset($_POST['password'])) {
    // Retrieve the entered username and password
    $username = $_POST["username"];
    $password = $_POST["password"];


    // Check if the connection was successful
    if ($conn) {
        // Prepare the SQL query to retrieve the user with the entered username and password
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        
        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check if a matching user was found
        if (mysqli_num_rows($result) == 1) {
            // Set a cookie to remember the logged-in user
            setcookie("username", $username, time() + (86400 * 30), "/"); // Cookie expires in 30 days
            while($row=mysqli_fetch_array($result)){
                $_SESSION['id']=$row['ID'];
            }
            // Redirect to the home page
            header("Location: index.php");
            exit();
        } else {
            // Invalid login credentials
            $error = "Invalid username or password";
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        // Database connection error
        $error = "Failed to connect to the database";
    }
}
?>
