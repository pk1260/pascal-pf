<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-04
 * Time: 11:22
 */

class NotFoundController {
    function notfoundpage(){
        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/notfound.php';
        include __DIR__ . '/../views/footer.php';
    }
}