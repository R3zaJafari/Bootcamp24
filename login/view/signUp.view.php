<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(__DIR__.'/../links.php')?>
    <title>LogIn</title>
</head>
<body>
    <a class="p-2 bg-blue-500 rounded-lg m-2 text-white w-10/12"  href="logIn.view.php">Go to LogIn</a>

    <div class="w-full max-w-xs">
        <form method="POST" action="../include/signUp.inc.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="username" type="text" placeholder="Username">
            </div>
           

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="Email ..." required>
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="******************" required>
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password repeat
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="repeat-pwd" id="repeat-pwd" type="repeat-pwd" placeholder="******************" required>
            </div>

            <?php
                if(isset($_REQUEST['error'])) 
                echo "<p class='text-red-500 text-sm m-2' >".  $_REQUEST['error'] ."</p>" 
            ?>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">
                    Sign Up
                </button>
            </div>

        </form>
    </div>   
</body>
</html>