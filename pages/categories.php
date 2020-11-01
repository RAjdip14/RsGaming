<?php
include('../includes/header.php');
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
     .subMenu a {
            height: 20px;
            float: left;
            margin-left: 50px;
            color: black;
            text-align: center;
            padding: 5px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }
     </style>
     <title>GamingWorld</title>
 </head>
 <body>
 <div class="subMenu" style="margin-top: 100px;">
                <a class="Action" href="<?php echo redirect_url("") ?>">Action</a>
                <a class="Adventure" href="<?php echo redirect_url("") ?>">Adventure</a>
                <a class="Fighting" href="<?php echo redirect_url("") ?>">Fighting</a>
                <a class="Racing" href="<?php echo redirect_url("") ?>">Racing</a>
                <a class="Sport" href="<?php echo redirect_url("") ?>">Sport</a>
            </div>
 </body>
 </html>
<?php
include('../includes/footer.php');
?>