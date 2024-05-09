<?php
    if (isset($_POST['submit']))
    {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeat_pwd = $_POST['repeat-pwd'];

        include(__DIR__.'/../database/dbConnection.php');
        include(__DIR__.'/../database/signUp.php');
        include(__DIR__.'/../controller/signUpController.php');
        

        $signUp = new SignUpController($username, $email, $password , $repeat_pwd);

        $signUp->signUpUser();

        header("location: ../view/signUp.view.php?error=query none");
    }
?>