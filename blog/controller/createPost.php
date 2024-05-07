<?php
    class post{
    public $post_title ;
    public $post_body   ;

  
    public function createpost($body)
    {   
        //get data from json
        $jsonPosts = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/blog/data.json');
       
        // convert  to std class
        $posts = json_decode($jsonPosts);

        $newPost[] =  $body;


        if(is_null($posts))
        {
            $json = json_encode($newPost);
            file_put_contents($_SERVER["DOCUMENT_ROOT"].'/blog/data.json', $json);

        }else{

            $count = count($posts) ;

            $postsArray = [];
           
            $newData = array_merge($posts,$newPost);

            $json = json_encode($newData);
            
            file_put_contents($_SERVER["DOCUMENT_ROOT"].'/blog/data.json', $json);
        }
    }
}

?>