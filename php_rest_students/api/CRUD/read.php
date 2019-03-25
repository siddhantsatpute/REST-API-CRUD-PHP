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

//model query
$result=$model->read();

//get row count
$row=$result->rowCount();

//check if any data
if($row>0)
{
    //model array
    $student_data=array();
    $student_data{'data'}=array();

    while($row=$result->fetch(PDO::FETCH_ASSOC))
    {
        extract($row);

        $student_item=array(
            'sr_no'=>$sr_no,
            'roll_no'=>$roll_no,
            'name'=>$name,
            'standard'=>$standard,
            'dob'=>$dob,
            'school'=>$school,
            'board'=>$board,
            'address'=>$address
        );

        //push to "data"
        array_push($student_data['data'], $student_item);
    }

    echo json_encode($student_data);
}

else
{
    //if no data is found
    echo json_encode(array('message'=>'No data found'));
}