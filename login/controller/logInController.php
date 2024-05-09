<?php 
    class loginController extends logIn{
        
        public $email = "";
        public $password = "";
       

        public function __construct($email , $password)
        {
            $this->email = $email;
            $this->password = $password;
        }
        
        public function LogInUser()
        {
           
            $this->getUser($this->email, $this->password);

        }           
    }
?>