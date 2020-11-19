<?php

$hostname = $_SERVER['DOCUMENT_ROOT'];
$projectName = explode("/", $_SERVER['REQUEST_URI']);
include($hostname . "/" . $projectName[1] . '/database/connection.php');

if(!isset($_SESSION['islogin'])){
    // header("location:adminLogin.php");
}
if (isset($_POST['submit'])) {
    $tempName = $_FILES['gameImage']['tmp_name'];
    $fileName = $_FILES['gameImage']['name'];
    $destination = '../assets/uploaded_files/' . $fileName;
    move_uploaded_file($tempName, $destination);

    $gameName = $_POST['gameName'];
    $gameDescription = $_POST['gameDescription'];
    $insertQuery = "INSERT INTO `users` ( `g_name`,`g_description`,`game_photos`)             VALUES ('$gameName','$gameDescription','$gameImage')";


}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RsGaming</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Game Name</td>
                <td><input type="text" name="gameName" id=""></td>
            </tr>
            <tr>
                <td>Game Description</td>
                <td><textarea name="gameDescription" id="" rows="10" cols="60"></textarea></td>
            </tr>
            <tr>
                <td>upload Game Photo</td>
                <td><input type="file" name="gameImage" id="" accept="image/*"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit" /></td>
            </tr>
        </table>
    </form>
</body>
</html>