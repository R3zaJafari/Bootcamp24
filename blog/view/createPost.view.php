<?php 
    require(__DIR__.'/../controller/createPost.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create</title>
    <?php require(__DIR__.'/../links.php') ?>
</head>
<body>
<a href="posts.view.php" class=" m-10 p-2 rounded-lg  border font-medium text-blue-600 dark:text-blue-500 hover:underline">return to posts</a>

<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" >

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Title">
        Title
      </label>
      <input name="head" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Title" type="text" placeholder="your post title">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Body">
        Post Body
      </label>
      <textarea name="body" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="Body" type="Body"></textarea>
    </div>

    <div class="flex items-center justify-between">
      <button type="sumbit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        create my post
      </button>
    </div>

  </form>

  <?php
  if(isset($_REQUEST['head']))
  {
      $post = new post;
      $post->createpost($_GET['head'] , $_GET['body']);
  }
  ?>

</div>
</body>
</html>

