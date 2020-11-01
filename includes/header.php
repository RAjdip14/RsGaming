<?php

$hostname = $_SERVER['DOCUMENT_ROOT'];
$projectName = explode("/", $_SERVER['REQUEST_URI']);
include($hostname . "/" . $projectName[1] . '/database/connection.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../assets/css/header.css"> -->
    <title>RsGaming</title>
    <style>
        .header {
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            /* float: left; */
            background-color: darkcyan;
            /* padding: 20px 10px; */
        }

        .header a {
            height: 20px;
            /* float: left; */
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {

            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        /* .header a.home {
            float: left;
            background-color: dodgerblue;
            color: white;
        } */
        /* .header a.categories {
            background-color: dodgerblue;
            color: white;
        }

        .header a.contact {
            background-color: dodgerblue;
            color: white;
        }

        .header a.aboutUs {
            background-color: dodgerblue;
            color: white;
        } */

        .header-left {
            float: left;
        }

        .search {
            height: 30px;
            margin-left: 750px;
            padding: 4px;
            float: left;
        }

        .search input[type=search] {

            float: left;

        }

        .search button.search {
            float: left;
            padding-top: 50px;
        }

        .hRight {
            float: right;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="" <?php echo redirect_url("index.php") ?> class="logo">RsGaming</a>
        <ul>
            <div class="header-left">
                <a class="home" href="<?php echo redirect_url("index.php") ?>">Home</a>
                <a class="categories" href="<?php echo redirect_url("pages/categories.php") ?>">Categories</a>
                <a class="contact" href="<?php echo redirect_url("pages/contact.php") ?>">Contact</a>
                <a class="aboutUs" href="<?php echo redirect_url("pages/aboutUs.php") ?>">About</a>
            </div>
        </ul>
        <div class="search">
            <form action="">
                <!-- <input type="text" name="search" placeholder="Search"> -->
                <input type="search" name="search" placeholder="Search">
                <button type="submit" name="search">Search</button>
            </form>
        </div>
        <div class="hRight">
            <a href="<?php echo redirect_url("User/userLogin.php"); ?>" id="userLogin">Login</a>
            <a href="<?php echo redirect_url("User/userRegister.php"); ?>" id="userRegister">Register</a>

        </div>
    </div>