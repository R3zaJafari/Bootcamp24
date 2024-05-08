<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "second_task_backend";

// Create connection
$conn = mysqli_connect($servername , $username , '');

if (! $conn) {  
    die("Connection failed" . mysqli_connect_error());  
} else {  
    mysqli_select_db($conn, $dbname);  
}  
echo "<br>";

?>