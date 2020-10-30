<?php
include("../database/connection.php");
$passwordError = '';
if (isset($_REQUEST['btnRegister'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];

    if ($password != $confirm_password) {
        $passwordError = "password does not match";
    } else {
        $insertQuery = "INSERT INTO `users` (`name`, `email`,`contact`, `password`)
        VALUES ('$name', '$email','$contact', '$password');";

        $isSuccess = $db->query($insertQuery);
        if ($isSuccess) {
            header('location:userLogin.php?success=user register successfully!');
        }
        echo "Registration fail!!!";
        // $yogeshMoreDeveloper
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/userRegister.css">
    <title>RsGaming</title>
</head>

<body>
    <div class="register">
        <fieldset class="userfield">
            <h1>Register Page</h1>
            <form method="post" enctype="multipart/form-data" onsubmit="return validate();">
                <input type="text" name="name" id="name" placeholder="Enter Your Name"><br /><br />
                <input type="email" name="email" id="email" placeholder="Enter Your Email"><br /><br />
                <input type="number" name="contact" id="contact" placeholder="Enter Your Contact Number"><br /><br />
                <input type="password" name="password" id="password" placeholder="Enter your Password"><br /><br />
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password"><br /><br />
                <?php echo $passwordError ?><br /><br />
                <button type="submit" name="btnRegister" id="btnRegister">Register</button>
                <a href="userLogin.php">Already User?</a>
            </form>
        </fieldset>
    </div>

    <script>
        var pass_return = '';

        function validate() {
            if (document.getElementById('name').value == '') {
                alert('Please enter Your Name');
                return false;
            } else if (document.getElementById('email').value == '') {
                alert('Please enter Your Email');
                return false;
            } else if (document.getElementById('password').value == '' && document.getElementById('confirm_password').value == '') {
                alert('enter your password');
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>