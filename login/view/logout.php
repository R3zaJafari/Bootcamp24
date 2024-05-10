<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include(__DIR__.'/../links.php')?>
    <title>Document</title>
</head>
<body>
    <div class="bg-green-500 m-2 p-2 rounded">
      
      <?php
        if(isset($_SESSION['email']) || isset($_COOKIE['email'])){
          echo "you are success fully logged in ". "<a class='text-white'>".$_COOKIE['email'] ."</a>"." you can log out now ";
          echo "<br><br>";
          echo "<a href='logout.php?logout=true' class='bg-red-500 text-white m-2 p-2 rounded'>logout</a>";
        }

        if(isset($_REQUEST['logout']))
        {
          unset($_COOKIE['email']); 
          setcookie('email', '', -1, '/'); 
          session_destroy();
          header('location:../view/signUp.view.php');
        }
      ?>
    </div>
</body>
