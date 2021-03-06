<?php
require_once('db.php');
require_once('../model/Response.php');

try {
    $writeDB  = DB::connectWriteDB();
    $readDB = DB::connectReadDB();
}
catch(PDOException $ex) {
    print_r($ex);
    die();
    $response = new Response();
    $response->setHttpStatusCode(500);
    $response->setSuccess(false);
    $response->addMessage("Database Connection error");
    $response->send();
    exit;
}