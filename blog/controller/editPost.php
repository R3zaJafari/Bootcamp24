<?php
    $jsonPosts = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/blog/data.json');
    
    $posts = json_decode($jsonPosts);

    $id = $_GET['id'];
    $post = $posts[$id];
?>