<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-04
 * Time: 10:58
 */

class HomeController {
    function homepage(){
        $preview = displayPreview();
        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/landpage.php';
        include __DIR__ . '/../views/footer.php';
    }
}