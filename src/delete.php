<?php
    include('config.php');
     $id = $_GET['id'];
    
    $query = mysqli_query($conn, "DELETE FROM prod WHERE ID = '$id'");
    if ($query) {
        header('location:index.php');
    } else {
        echo "ERROR";
    }
?>