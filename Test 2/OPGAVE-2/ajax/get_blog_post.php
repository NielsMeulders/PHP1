<?php

include_once("../classes/Blog.class.php");
$blog = new Blog();

if(!empty($_GET['id']))
{
    try
    {
        $return = $blog->getOne($_GET['id']);
        $arr_response = [
            'status' => 'success',
            'post' => $return
        ];
    }
    catch (Exception $e)
    {
        $feedback = $e->getMessage();
        $arr_response = [
            'status' => 'error',
            'message' => $feedback
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($arr_response);
}

?>
