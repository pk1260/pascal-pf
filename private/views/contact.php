<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-11
 * Time: 09:50
 */
?>

<div class="project__main">
    <div class="project__header">
        <h2 class="project__header-h2">Contact me</h2>
        <div class="icon-scroll"></div>
    </div>
</div>

<div class="contact__content-box">
    <div class="contact__content">
        <h2 class="contact__content-h2">Contact me</h2>
        <form class="contact__content-form" action="mail" method="post">
            <input type="text" name="name" placeholder="name">
            <input type="email" name="mail" placeholder="email">
            <input type="text" name="subject" placeholder="subject">
            <textarea name="message" placeholder="message"></textarea>
            <input type="submit" name="SEND MAIL">
        </form>
    </div>
</div>
