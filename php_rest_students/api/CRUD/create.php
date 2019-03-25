<?php

//headers for access to the http.
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
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

$model->roll_no=$data->roll_no;
$model->name=$data->name;
$model->standard=$data->standard;
$model->dob=$data->dob;
$model->school=$data->school;
$model->board=$data->board;
$model->address=$data->address;

//create 
if($model->create())
{
    echo json_encode(
        array('message'=>'Data Created')
    );
}
else
{
    echo json_encode(
        array('message'=>'Data Not Created')
    );
}

?>