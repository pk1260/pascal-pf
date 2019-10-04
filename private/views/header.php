<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-04
 * Time: 12:09
 */
?>

</<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/default.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href=""><h1>pascal<span>kuiper</span></h1></a>
        <nav>
            <ul class="nav__links">
                <li><a href="">portfolio</a></li>
                <li><a href="">blog</a></li>
                <li><a href="">contact</a></li>
            </ul>
            <a onclick="openNav()" class="menu" href="">menu</a>
        </nav>
    </header>
    <div id="mobile__menu" class="overlay">
        <a class="close" onclick="closeNav()">&times;</a>
        <div class="overlay__content">
            <a href="">portfolio</a>
            <a href="">blog</a>
            <a href="">contact</a>
        </div>
    </div>
    <script type="text/javascript" src="js/mobile-nav.js"></script>
</body>
</html>
