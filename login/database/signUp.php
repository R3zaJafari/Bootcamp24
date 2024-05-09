<?php
    class signUp extends db{

        protected function setUser($username , $email, $password)
        {
            $query = $this->conn()->prepare('INSERT INTO users (username, email, password)
            VALUES ( ? , ? , ? );');
            
            

            if(!$query->execute(array($username , $email , $password)))
            {
                $query = null ;
                header("location: ../view/signUp.view.php?error=UserExist");
                exit();
            }
            $query = null;
        }

        protected function checkUser($email)
        {
            $query = $this->conn()->prepare('SELECT * FROM users WHERE email=? ;');

            if(!$query->execute(array($email)))
            {
                $query = null ;
                header("location: ../view/signUp.view.php?error=query problem");
                exit();
            }

            $userexist = '';
            if($query->rowCount() > 0)
            {
                $userexist = true;
            }else{
                $userexist = false;
            }

            return $userexist;
        }
    } 
?>