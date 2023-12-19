<!DOCTYPE html>
<html>
<head>
    <title>update Product</title>
    <link href="./../dist/output.css" rel="stylesheet"></head>

</head>
<body>
    <?php
        include('config.php');
        $up=mysqli_query($conn,"SELECT * from prod where ID='$_GET[id]'");

        $data=mysqli_fetch_array($up);

    ?>

    <div class="flex flex-col items-center justify-center ">
    <div class="w-[50%] shadow-2xl shadow-gray-600 border p-4 my-4">
            <form method="POST" action="up.php" enctype="multipart/form-data" class="flex flex-col justify-center items-center space-y-4">
            <h2>edit product</h2>
                <input type="text" name="ID"  value="<?php echo $data['ID']?>" required class="border font-sm p-2 border-black rounded-lg w-[60%] hidden" >
                <input type="text" name="product_name"  value="<?php echo $data['name']?>" id="product_name" placeholder="name" required class="border font-sm p-2 border-black rounded-lg w-[60%]" >
                <input type="number" name="product_price" value="<?php echo $data['price']?>" id="product_price" placeholder="price" required class="border font-sm p-2 border-black rounded-lg w-[60%]" >
                <input  type="file" name="product_image" id="product_image" required class="hidden">
                <div class="flex space-x-3 justify-center items-center " >
                <label class="bg-blue-500 text-white font-bold cursor-pointer px-2 py-1 rounded-sm" for="product_image">update a image</label>
                   <input name="update" class="bg-green-700 text-white px-2 py-1 cursor-pointer rounded-sm" type="submit" value="edit product">
                </div>
                <a class="text-orange-400 font-semibold " href="index.php">show all products</a>
            </form>    
        </div>
    </div>
</body>
</html>
