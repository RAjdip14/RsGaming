<?php
include('includes/header.php');
if(!isset($_SESSION['islogin'])){
    header("location:User/userLogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>RsGaming</title>
</head>

<body>
    <h1 style="margin-top: 100px; color:darkorange">Welcome to RsGaming world...</h1>
    <div class="divGallery" style="display: flex;">
        <div class="gallery">
            <a target="_blank" href="assets/image/rocket league2.jpg">
                <img src="assets/image/rocket league.jpg" alt="" width="100" height="100">
            </a>
            <div class="desc">Genres/Tags: Arcade, Sports, Third-person, 3D <br />
                Company:Psyonix<br />
                Languages:RUS/ENG/ <br /> MULTI12<br />
                Size: 11.1 GB<br /><br /><br /><br /><br />
                <a href="https://1337x.to/torrent/4380776/Rocket-League-v1-75-36-DLCs-Offline-Unlocker-MULTi12-FitGirl-Repack/">download</a>
            </div>
        </div>
        <div class="gallery">
            <a target="_blank" href="assets/image/Ghostrunner.jpg">
                <img src="assets/image/Ghostrunner.jpg" alt="" width="100" height="100">
            </a>
            <div class="desc">Genres/Tags: Action,<br />
                Companies: One More Level, All in! Games,<br />
                Size: 13.8 GB<br />

            </div>
        </div>
        <div class="gallery">
            <a target="_blank" href="assets/image/Crysis 3 Digital Deluxe Edition.jpg">
                <img src="assets/image/Crysis 3 Digital Deluxe Edition.jpg" alt="" width="100" height="100">
            </a>
            <div class="desc">Company: Electronic Arts<br />
                Languages: RUS/ENG/MULTI10<br />
                Original Size: 14,3 GB<br />
                Repack Size: 6,8 GB<br />
            </div>
        </div>
        <div class="gallery">
            <a target="_blank" href="assets/image/Battlefield V.jpg">
                <img src="assets/image/Battlefield V.jpg" alt="" width="100" height="100">
            </a>
            <div class="desc">Genres/Tags: Action, Shooter, First-person, 3D<br />
                Companies: DICE, DICE Los Angeles, Electronic Arts<br />
                Languages: RUS/ENG/MULTi14<br />
                Original Size: 50.6 GB<br />
                Repack Size: 33.2 GB<br />
            </div>
        </div>
        <div class="imgMarquee">
            <marquee behavior="" direction="">
                <img src="assets/image/rocket league.jpg" alt="" width="200" height="200">
                <img src="assets/image/Ghostrunner.jpg" alt="" width="200" height="200">
                <img src="assets/image/Crysis 3 Digital Deluxe Edition.jpg" alt="" width="200" height="200">
                <img src="assets/image/Battlefield V.jpg" alt="" width="200" height="200">

            </marquee>
        </div>
    </div>






    <?php
    include('includes/footer.php');
    ?>