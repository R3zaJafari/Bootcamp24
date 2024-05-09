<?php
    class logIn extends db{

        protected function getUser($email, $password)
        {
            $query = $this->conn()->prepare('SELECT password FROM users WHERE email = ? ;');
            
            
            if(!$query->execute(array($email)))
            {
                $query = null ;
                header("location: ../view/logIn.view.php?error=wrong query");
                exit();
            }
            

            $loginData = $query->fetchAll(PDO::FETCH_ASSOC);
            if(count($loginData) == 0) {
            $stmt = null;
            header("location: login.php?error=usernotfound");
            exit();
            }

            $pwd_hashed = $query->fetchAll(PDO::FETCH_ASSOC);
            

            if(!$pwd_hashed == $password)
            {
                $query = null ;
                header("location: ../view/logIn.view.php?error=wrong password");
                exit();
            }elseif($pwd_hashed == $password)
            {
                $query = $this->conn()->prepare('SELECT * FROM users WHERE email = ? AND password = ? ;');

                if(!$query->execute(array($email, $pwd_hashed[0]['password'])))
                {
                    $query = null ;
                    header("location: ../view/logIn.view.php?error=wrong query");
                    exit();
                }

                if($query->rowCount() == 0)
                {
                    $query = null ;
                    header("location: ../view/logIn.view.php?error=user not found");
                    exit();
                }

                $user = $query->fetchAll(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION['email'] = $user[0]['email'];
            }
            
            $query = null;
        }

        
    } 
?>