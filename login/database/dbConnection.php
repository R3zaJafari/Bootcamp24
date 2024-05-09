<?php 
    class db{
        public function conn()
        {
            try {
            $conn = new PDO("mysql:host=localhost;dbname=login" , "root" , "");
            return $conn;
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
        }
    }
?>