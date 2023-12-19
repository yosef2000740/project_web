<?php
// Check if the form is submitted
if (isset($_POST['update'])) {
    $ID=$_POST['ID'];
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

    // update the product into the database
    $update = "UPDATE prod SET name='$productName',price='$productPrice',image='$image_up' WHERE ID=$ID";
    if (mysqli_query($conn, $update)) {
        // Product added successfully
        if(move_uploaded_file($image_location,'images/'.$image_name)){
            echo '<script>alert("Product update successfully")</script>';
        }else{
            echo '<script>alert("Product update Faild")</script>';
        }     
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
    header('Location: index.php');
    // Close the database connection
    mysqli_close($conn);
}
?>