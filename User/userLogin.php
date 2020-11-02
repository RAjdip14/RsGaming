<?php
include("../database/connection.php");

if(isset($_REQUEST['btnlogin'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $loginQuery = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ";
    $rows = $db->query($loginQuery);
    $result=$rows-> fetch_object();
    if ($rows->num_rows == 1) 
    {
        $_SESSION['islogin']=true;
        $_SESSION['name']=$result->name;
        // print_r($_SESSION);
        header('location:../index.php');
    } else
    {
        echo "Login fail";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/userLogin.css">
    <title>Document</title>
</head>
<body>
<div class="login">
        <fieldset class="field">
            <form action="" method="post">
                <h1>User Login</h1>
                <input type="email" name="email" id="email" style="border-radius: 7px;" placeholder="Enter your email"><br><br>
                <input type="password" name="password" id="password" style="border-radius: 7px;"placeholder="Enter your password"><br><br>
                <button type="submit" name="btnlogin" id="btnlogin">Login</button>
                <a href="userLogin.php">Forgot password</a>
            </form>
        </fieldset>
    </div>
</body>
</html>

