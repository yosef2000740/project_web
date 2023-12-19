<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the product details from the form
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productImage = $_FILES['product_image']['name'];
    $image_location = $_FILES['product_image']['tmp_name'];
    $image_name = $_FILES['product_image']['name'];
    $image_up="images/".$image_name;

    // Validate the form data (you can add more validation if needed)

    // Connect to the MySQL database
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    // Check if the connection was successful
    if (!$conn) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    // Insert the product into the database
    $sql = "INSERT INTO prod (name, image,price) VALUES ('$productName','$image_up','$productPrice')";
    if (mysqli_query($conn, $sql)) {
        // Product added successfully
        if(move_uploaded_file($image_location,'images/'.$image_name)){
            echo '<script>alert("Product added successfully")</script>';
        }else{
            echo '<script>alert("Product added Faild")</script>';
        }     
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
    header('Location: addProduct.php');
    // Close the database connection
    mysqli_close($conn);
}
?>