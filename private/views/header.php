<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-04
 * Time: 12:09
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo url('/css/mobile-nav.css')?>">
    <link rel="stylesheet" href="<?php echo url('/css/landpage.css')?>">
    <link rel="stylesheet" href="<?php echo url('/css/portfolio.css')?>">
    <link rel="stylesheet" href="<?php echo url('/css/project.css')?>">
    <link rel="stylesheet" href="<?php echo url('/css/contact.css')?>">
    <link rel="icon" href="<?php echo url('/img/pk-1.png')?>" type="image/x-icon" />
    <title>PascalKuiper</title>
</head>
<body>
    <header id="header">
        <a href="<?php echo url('/')?>"><h1>pascal<span>kuiper</span></h1></a>
        <nav>
            <ul class="nav__links">
                <li><a href="<?php echo url('/portfolio')?>">portfolio</a></li>
                <li><a href="<?php echo url('/blog')?>">blog</a></li>
                <li><a href="<?php echo url('/contact')?>">contact</a></li>
            </ul>
            <a onclick="openNav()" class="menu">menu</a>
        </nav>
    </header>
    <div id="mobile__menu" class="overlay">
        <a class="close" onclick="closeNav()">&times;</a>
        <div class="overlay__content">
            <a href="<?php echo url('/portfolio')?>">portfolio</a>
            <a href="<?php echo url('/blog')?>">blog</a>
            <a href="<?php echo url('/contact')?>">contact</a>
        </div>
    </div>
