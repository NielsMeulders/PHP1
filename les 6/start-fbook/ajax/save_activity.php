<?php

include_once("../classes/Activity.class.php");
$activity = new Activity();
//controleer of er een update wordt verzonden
if(!empty($_POST['text']))
{
    $activity->Text = $_POST['text'];
    try
    {
        $activity->Save();

        $arr_response = [
            'status' => 'success',
            'text' => $_POST['text']
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
