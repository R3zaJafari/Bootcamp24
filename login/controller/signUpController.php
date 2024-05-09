<?php 
    class SignUpController extends signUp{
        
        public $username = "";
        public $email = "";
        public $password = "";
        public $repeat_pwd = "";

        public function __construct($username  , $email , $password , $repeat_pwd)
        {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->repeat_pwd = $repeat_pwd;
        }
        
        public function signUpUser()
        {
            if($this->verifyPassword() == false){
                header("location: ../view/signUp.view.php?error=password doesnt match");
                exit();
            }elseif($this->checkUser($this->email) == true){
                header("location: ../view/signUp.view.php?error=user with this email exist");
                exit();
            }else{
                $this->setUser($this->username , $this->email, $this->password);
            }
        }
        
        public function verifyPassword()
        {
            $result ='';

            if ($this->password !== $this->repeat_pwd)
            {
                $result = false;
            }else{
            $result = true;
            }

            return $result;
        }            
    }
?>