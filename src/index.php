<?php
session_start();

// Check if the user is already logged in
$loggedIn = isset($_SESSION['id'])

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Site</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href='./../dist/output.css' rel='stylesheet'></head>

</head>
<body>
    <header class="bg-gray-200 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <img src="./img/logo.jpg"  alt="Logo" class="h-12 ">
            </div>
            <div>
                <?php if($loggedIn): ?>
                    <form action="fun/logout.php" method="post"  >
                        <button type="submit" name="logout" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">Logout</button>
                        <a href="addProduct.php" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded">Add product</a>
                    </form>
                <?php else: ?>
                    <a href="login.php" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Login</a>
                    <a href="signup.php" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">Signup</a>
                <?php endif; ?>
            </div>
        </div>
    
    </header>
    <?php if($loggedIn): ?>
        <?php 
            include("home.php")
        ?>
       <?php else: ?>
            <?php
                include("login.php");
            ?>
    <?php endif; ?>
</body>
</html>