<?php

//headers for access to the http.
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods,
        Authorization, X-Requested-With');

include_once '../../config/Connect.php';
include_once '../../Model/model.php';

//instantiate DB & connect
$database=new Connect();
$db=$database->connect();

//instantiate model object
$model=new Model($db);

//Get the Raw data
$data=json_decode(file_get_contents('php://input'));

//set roll_no to delete
$model->roll_no=$data->roll_no;

//delete  
if($model->delete())
{
    echo json_encode(
        array('message'=>'Post Deleted')
    );
}
else
{
    echo json_encode(
        array('message'=>'Post Not Deleted')
    );
}

?>