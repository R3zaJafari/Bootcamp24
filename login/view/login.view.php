<?php
  if(isset($_COOKIE['email'])){
    header('location:../view/logout.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include(__DIR__.'/../links.php')?>
    <title>Document</title>
</head>
<body>
            <?php
                if(isset($_REQUEST['error'])) 
                echo "<p class='text-red-500 text-sm m-2' >".  $_REQUEST['error'] ."</p>" 
            ?>
  <a class="p-2 bg-blue-500 rounded-lg m-2 text-white"  href="SignUp.view.php">Go to SignUp</a>
  <div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="../include/logIn.inc.php">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" name="email" for="email">
          email
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="Email ..." required>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" name="password" for="password">
          Password
        </label>
        <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="******************" required>
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">
          logIn
        </button>
      </div>
    </form>
  </div>

</body>
</html>
