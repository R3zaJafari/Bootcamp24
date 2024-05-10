<?php
    class logIn extends db{

        protected function getUser($email, $password)
        {
            $query = $this->conn()->prepare("SELECT * FROM users WHERE email = :email AND password = :password;");
            $statment = $query->execute(array("email"=> $email,"password"=> $password));

            $count = $query->rowCount();

            if ($count > 0) {
                session_start();
                setcookie('email' , $email, time() + (86400 * 30), "/");
                $_SESSION['email']  = $email;
                header('location:../view/logout.php');
            }else{
                header('location:../view/login.view.php?error=user not found');
            }
        }

        
    } 
?>
