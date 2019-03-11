<?php

use app\src\Flash;
use app\src\Redirect;



function ddmp($data){

    print_r($data);

    die();
}


function json($data){

    header('Content-Type: application/json');

    echo json_encode($data);
}


function path(){

    $vVendorDir = dirname(dirname(__FILE__));

    return dirname($vVendorDir);
}


function Flash($index, $message){

    Flash::add($index, $message);
}


function Error($message){

    return "<span class='error right'>* {$message}</span>";
}


function Success($message){

    return "<span class='success right'>* {$message}</span>";
}


function redirect($target)
{
    Redirect::redirect($target);

    die();
}


function back(){

    Redirect::back();

    die();
}


