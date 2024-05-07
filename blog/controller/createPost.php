<?php
    class post{
    public $post_title ;
    public $post_body   ;

  
    public function createpost($title , $body)
    {   
        //get data from json
        $jsonPosts = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/blog/data.json');
        // convert  to std class
        $posts = json_decode($jsonPosts);
        var_dump($posts);
        $postsArray = [];

        $newPost = Array (
            Array (
                "subject" => $title,
                "body" => $body,
            ),
        );

        // $count = count($posts);

        
        
        // $head = $posts[0]->subject;
        // $body = $posts[0]->body;
        // $postsArray = Array (
        //     "0" => Array (
        //         "subject" => $head,
        //         "body" => $body,
        //     ),
        // );
        // var_dump($postsArray[0]);

        foreach((array)$posts as $post)
        {   
            $head = $posts[$post]->subject;
            $body = $posts[$post]->$body;

            $postsArray = Array (
                Array(
                "subject" => $head,
                "body" => $body,
                )
            );
        }
       
        
       

        if(is_null($posts))
        {
            //insert data to json
            $json = json_encode($newPost);
            file_put_contents($_SERVER["DOCUMENT_ROOT"].'/blog/data.json', $json);
        }else{
        var_dump($postsArray);
        //collect data and merg with new data
        $newData = array_push($postsArray,$newPost);

        $json = json_encode($newData);
        
        file_put_contents($_SERVER["DOCUMENT_ROOT"].'/blog/data.json', $json);
        }

        
    }

}

?>