<?php require(__DIR__.'/../controller/posts.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Posts</title>
    <?php require(__DIR__.'/../links.php') ?>
</head>
<body>
    <center>
        
        <div class="m-10">
            <div class="flex justify-center">
                <a class= "m-10 p-2 rounded-lg  border font-medium text-blue-600 dark:text-blue-500 hover:underline" href="./createPost.view.php">create contect</a>
                <a href="managePage.view.php" class=" m-10 p-2 rounded-lg  border font-medium text-blue-600 dark:text-blue-500 hover:underline">manage Page</a>
            </div>
            <br>
            <br>
            <h2>
                <?php foreach($posts as $key => $post){ 
                    echo "<div class='border rounded w-8/12 m-2'>";
                    echo "<h2> post number $key<h2>";
                    echo "<h1>$post</h1>";
                    echo "</div>";
                }
                ?>
            </h2>
            
        </div>  
    </center>        
</body>
</html>