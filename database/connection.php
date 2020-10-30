<?php
$db = new mysqli('localhost', 'root', '', 'rsgaming');
// echo "<pre>";print_r($_SERVER);exit; 

function file_url($path){
//   'C:\xampp\httdocs\rsgaming\database\connection.php'
$hostname = $_SERVER['DOCUMENT_ROOT'];
$projectName = explode("/",$_SERVER['REQUEST_URI']);
return  $hostname."/".$projectName[1].$path; 
}

function redirect_url($path){
    $hostname = $_SERVER['HTTP_HOST'];
    $projectName = explode("/",$_SERVER['REQUEST_URI']);
    // print_r($peojectName[1]);exit;
    return  "http://".$hostname."/".$projectName[1]."/".$path;
}
?>