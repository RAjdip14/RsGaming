<?php
$hostname = $_SERVER['DOCUMENT_ROOT'];
$projectName = explode("/",$_SERVER['REQUEST_URI']);
require($hostname."/".$projectName[1].'/database/connection.php');

$id = $_POST['delete_id'];
$db->query("DELETE FROM `users` WHERE `id` = $id");
header('location:adminDashboard.php?status=success');
