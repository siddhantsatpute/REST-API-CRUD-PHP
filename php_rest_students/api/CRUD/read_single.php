<?php

//headers for access to the http.
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Connect.php';
include_once '../../Model/model.php';

//instantiate DB & connect
$database=new Connect();
$db=$database->connect();

//instantiate model object
$model=new Model($db);

//Get the roll_no
$model->roll_no=isset($_GET['roll_no']) ? $_GET['roll_no'] : die();

//Get data
$model->read_single();

//create array
$data_arr=array(
    'sr_no'=>$model->sr_no,
    'roll_no'=>$model->roll_no,
    'name'=>$model->name,
    'standard'=>$model->standard,
    'dob'=>$model->dob,
    'school'=>$model->school,
    'board'=>$model->board,
    'address'=>$model->address
);

//convert array into json and print it
echo json_encode($data_arr);

?>