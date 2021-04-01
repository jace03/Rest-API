<?php

require_once ("Task.php");

try{
    $task = new Task(1,"title here", "description here", "03/05/2021 12:45", "n");
    header("Content-type: application/json;charset=utf-8");
    echo json_encode($task->returnTaskAsArray());
}catch(TaskException $ex){
    echo "Error:".$ex->getMessage();
}