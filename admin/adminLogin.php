<?php
$hostname = $_SERVER['DOCUMENT_ROOT'];
$projectName = explode("/",$_SERVER['REQUEST_URI']);
include($hostname."/".$projectName[1].'/database/connection.php');

if(isset($_REQUEST['btnlogin'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
     echo $loginQuery = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password' ";

    $rows = $db->query($loginQuery);
    if ($rows->num_rows == 1) {
        header('location:adminDashboard.php');
    } else {
        echo "Login fail";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/adminLogin.css">
    <title>RSGaming</title>
</head>

<body>
    <div class="login">
        <fieldset class="field">
            <form action="" method="post">
                <h1>Login</h1>
                <input type="email" name="email" id="email" style="border-radius: 7px;" placeholder="Enter your email"><br><br>
                <input type="password" name="password" id="password" style="border-radius: 7px;"placeholder="Enter your password"><br><br>
                <button type="submit" name="btnlogin" id="btnlogin">Login</button>
            </form>
        </fieldset>
    </div>
</body>

</html>