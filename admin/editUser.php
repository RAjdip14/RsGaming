<?php

$hostname = $_SERVER['DOCUMENT_ROOT'];
$projectName = explode("/", $_SERVER['REQUEST_URI']);
include($hostname . "/" . $projectName[1] . '/database/connection.php');


$id = $_REQUEST['edit_id'];
$userRecord = "SELECT * FROM `users` WHERE id = $id";

$row = $db->query($userRecord);

$user = $row->fetch_object();

if (isset($_REQUEST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    echo $updateUserQuery  = "UPDATE `users` SET 
        `name` = '$name',
        `email` = '$email',
        `contact` = '$contact' WHERE id = $id
    ";

    if ($db->query($updateUserQuery)) {
        echo "updated!";
        header('location:adminDashboard.php');
    } else {
        echo 'something wrong';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <table border="0">
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name" placeholder="Enter Your Name" value="<?php echo $user->name; ?>"></td>
            </tr>
            <tr>
                <td><label for="contact">Contact</label></td>
                <td><input type="number" name="contact" id="contact" value="<?php echo $user->contact; ?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email" value="<?php echo $user->email; ?>"></td>
            </tr>
            <tr>
                <td><label for="password">password</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><label for="confirm_password">confirm password</label></td>
                <td><input type="password" name="confirm_password" id="confirm_password">

                </td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="update" value="UPDATE" /></td>
            </tr>
        </table>

    </form>
</body>

</html>