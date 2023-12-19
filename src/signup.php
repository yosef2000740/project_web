<?php
// FILEPATH: /opt/lampp/htdocs/project_web/src/singup.php
include('config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // TODO: Validate the form data

    
    // Insert the user into the database
    $sql = "INSERT INTO users (username, email,password) VALUES ('$username','$email', '$password')";
    
    if (mysqli_query($conn, $sql)) {
        // Signup successful, redirect to the home page
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <link href="./../dist/output.css" rel="stylesheet"></head>
</head>
<body>

    <form method="POST" class="flex flex-col gap-2 p-8 bg-white">
    <input type="text" name="username" id="username" required placeholder="username" class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100">
    <input type="email" name="email" id="email" required placeholder="email" class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100">
    <input type="password" name="password" id="password" required placeholder="password" class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100">

    <input type="submit" value="SignUp" class="inline-block cursor-pointer rounded-md bg-gray-700 px-4 py-3.5 text-center text-sm font-semibold uppercase text-white transition duration-200 ease-in-out hover:bg-gray-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 active:scale-95" >
    </form>
</body>
</html>

