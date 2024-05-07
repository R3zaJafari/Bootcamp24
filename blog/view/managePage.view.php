<?php 
    require(__DIR__.'/../controller/managePage.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require(__DIR__.'/../links.php') ?>
    <title>Document</title>
</head>
<body>
<a href="posts.view.php" class=" m-5 p-2 rounded-lg  border font-medium text-blue-600 dark:text-blue-500 hover:underline">show all posts</a>

    <div class="bg-gray-500 m-2 flex">
        <?php 
            foreach($posts as $key => $post){ 
                echo "<div class='border rounded w-8/12 m-2 p-2'>";
                    echo "<h2 class='text-red-500'>post number $key<h2>";
                    echo "<h1>$post</h1>";
                    echo "<a class='text-blue-500' href='editPost.view.php?id=$key'>edit this post</a>";
                echo "</div>";
            
            }?>
    </div>
    
</body>
</html>