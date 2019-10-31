<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-04
 * Time: 11:27
 */

class ProjectController {
    function projectDetailPage($proj_slug){
        $project = displayProject($proj_slug);
        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/project-detail.php';
        include __DIR__ . '/../views/footer.php';
    }
}