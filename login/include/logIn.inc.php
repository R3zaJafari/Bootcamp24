<?php
    if (isset($_POST['submit']))
    {
       
        $email = $_POST['email'];
        $password = $_POST['password'];
      
        

        include(__DIR__.'/../database/dbConnection.php');
        include(__DIR__.'/../database/logIn.php');
        include(__DIR__.'/../controller/logInController.php');
        

        $logIn = new logInController($email, $password);

        $logIn->logInUser();

        header("location: ../view/logout.view.php?error=you are logged in");
    }
?>