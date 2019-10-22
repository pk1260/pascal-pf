<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-04
 * Time: 11:23
 */

class BlogController {
    function blogpage(){
        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/blog.php';
        include __DIR__ . '/../views/footer.php';
    }
}