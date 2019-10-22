<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-04
 * Time: 11:27
 */

class ProjectController {
    function projectpage(){
        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/projects.php';
        include __DIR__ . '/../views/footer.php';
    }
}