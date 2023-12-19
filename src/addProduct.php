<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link href="./../dist/output.css" rel="stylesheet"></head>

</head>
<body>
    <div class="flex flex-col items-center justify-center ">
    <div class="w-[50%] shadow-2xl shadow-gray-600 border p-4 my-4">
            <form method="POST" action="insert.php" enctype="multipart/form-data" class="flex flex-col justify-center items-center space-y-4">
            <h2>Shoping online</h2>
            <img class="rounded-2xl" src="./img/logo.jpg" alt="" width="400px"/>
                <input type="text" name="product_name" id="product_name" placeholder="name" required class="border font-sm p-2 border-black rounded-lg w-[60%]" >
                <input type="number" name="product_price" id="product_price" placeholder="price" required class="border font-sm p-2 border-black rounded-lg w-[60%]" >
                <input  type="file" name="product_image" id="product_image" required class="hidden">
                <div class="flex space-x-3 justify-center items-center " >
                <label class="bg-blue-500 text-white font-bold cursor-pointer px-2 py-1 rounded-sm" for="product_image">Choose a file</label>
                   <input name="upload" class="bg-green-700 text-white px-2 py-1 cursor-pointer rounded-sm" type="submit" value="Add Product">
                </div>
                <a class="text-orange-400 font-semibold " href="index.php">show all products</a>
            </form>    
        </div>
    </div>
</body>
</html>
