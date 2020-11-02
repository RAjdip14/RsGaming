<?php
// $hostname = $_SERVER['DOCUMENT_ROOT'];
// $projectName = explode("/",$_SERVER['REQUEST_URI']);
// include($hostname."/".$projectName[1].'/database/connection.php');
// ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .footer{
        position: fixed;
        left: 0;
        bottom: 0;
        padding-top: 10px;
        width: 100%;
        height: 40px;
        background-color: darkcyan;
        color: white;
        text-align: center;
    }
    </style>
</head>
<body>
<div class="footer"><h3> &copy; <?php echo date('Y');?> RsGaming. All Rights Reserved | Design by <a href="<?php echo redirect_url("index.php") ?>" class="logo">RsGaming</a><br/><br/></h3> </div>    
</body>
</html>
