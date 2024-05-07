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
            <a class= "m-10 p-2 rounded-lg  border font-medium text-blue-600 dark:text-blue-500 hover:underline" href="./createPost.view.php">create contect</a>
            <br>
            <br>
            <h2>
            <?php 

                if(isset($_REQUEST['body']))
                {
                    $data[] = array($_REQUEST['body']);

                    $inp = file_get_contents('results.json');
                    $tempArray = json_decode($inp);
                    array_push($tempArray, $data);
                    $jsonData = json_encode($tempArray);
                    file_put_contents('results.json', $jsonData);
                }
            ?> 
            </h2>
        </div>  
    </center>        
</body>
</html>