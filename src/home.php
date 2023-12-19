<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href='./../dist/output.css' rel='stylesheet'></head>
    
</head>
<body>
<div class='flex items-center justify-center my-4'>
        <h1 class="text-2xl font-semibold">show all product</h1>
</div>

<?php 
    include('config.php');
    
    $query=mysqli_query($conn,'SELECT * from prod');
    // create function take row and return html
    function echoHtml($row) {
        return "
      <div class='flex flex-row justify-center items-start space-x-4 '>
          <div class='card w-72 h-80 bg-gray-200 p-3 flex flex-col gap-1 '>
              <img src='$row[image]' class='duration-500 contrast-50 h-48 bg-gradient-to-bl from-black via-orange-900 to-indigo-600  hover:contrast-100' />
              <div class='flex flex-col gap-4'>
                  <div class='flex flex-row justify-between'>
                      <div class='flex flex-col'>
                          <span class='text-xl font-bold'>$row[name]</span>
                          <p class='text-xs text-gray-700'>ID: $row[ID]</p>
                      </div>
                      <span class='font-bold  text-red-600'>$row[price] $</span>
                  </div>
                  <div class='flex items-center justify-center space-x-3 '>
                  <a href='delete.php?id=$row[ID]'  class='hover:bg-red-900 text-[20px] text-gray-50 bg-red-500 p-2'>delete product</a>
                  <a href='update.php?id=$row[ID]' class='hover:bg-sky-700 text-gray-50 text-[20px] bg-sky-800 p-2'>edit product</a>
                  </div>
              </div>
          </div>
  ";
}
    while($row=mysqli_fetch_array($query)){
      echo "
            ".echoHtml($row)."
     ";
    }
?> 
</body>
</html>
