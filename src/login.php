<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="./../dist/output.css" rel="stylesheet"></head>
</head>
<body >
    <div class="flex flex-col items-center  min-h-screen bg-slate-400 ">
        <form method="POST" action="checklogin.php" class="flex flex-col mt-20  gap-2 p-8 w-[40%] bg-white shadow-2xl shadow-gray-600 border">
        <input type="text" name="username" id="username" required placeholder="username" class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100">
        <input type="password" name="password" id="password" required placeholder="password" class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100">
        <input type="submit" value="Login" class="inline-block cursor-pointer rounded-md bg-gray-700 px-4 py-3.5 text-center text-sm font-semibold uppercase text-white transition duration-200 ease-in-out hover:bg-gray-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 active:scale-95" >
        </form>
    </div>
</body>
</html>
  