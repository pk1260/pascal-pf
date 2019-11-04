<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-11
 * Time: 09:52
 */

if (!isset($_GET['proj_id'])) {
    echo 'mislukt';
} else {
    $project_id = $_GET['proj_id'];
}

$portfolio = displayProject($project_id);
?>
<div class="project__main">
    <div class="project__header">
        <h2 class="project__header-h2">Portfolio projects</h2>
        <div class="icon-scroll"></div>
    </div>
</div>

<div class="project__content-box">
    <?php foreach (array_slice($portfolio, 0, 1) as $project) { ?>
    <div class="project__content">
        <h2 class="project__content-h3"><?php echo $project['proj_name']?></h2>
        <div class="project__content-group-1">
            <img src="<?php echo url('/img/' . $project['proj_img']) ?>" alt="" class="project__content-img">
            <div class="project__content-split">
                <a href="<?php echo $project['proj_prev']?>" target="_blank" class="project__content-button" id="button-1">LIVE PREVIEW</a>
                <a href="<?php echo $project['proj_git']?>" target="_blank" class="project__content-button" id="button-2">GITHUB</a>
            </div>
            <div class="project__content-list">
                <ul class="project__content-list-left">
                    <li><?php if($project['proj_code-1'] > "") echo '◎ ' . $project['proj_code-1']; ?></li>
                    <li><?php if($project['proj_code-2'] > "") echo '◎ ' . $project['proj_code-2']; ?></li>
                    <li><?php if($project['proj_code-3'] > "") echo '◎ ' . $project['proj_code-3']; ?></li>
                </ul>
                <ul class="project__content-list-right">
                    <li><?php if($project['proj_code-4'] > "") echo '◎ ' . $project['proj_code-4']; ?></li>
                    <li><?php if($project['proj_code-5'] > "") echo '◎ ' . $project['proj_code-5']; ?></li>
                    <li><?php if($project['proj_code-6'] > "") echo '◎ ' . $project['proj_code-6']; ?></li>
                </ul>
            </div>
        </div>
        <div class="project__content-group-2">
            <h4 class="project__content-h4">Project information:</h4>
            <p class="project__content-p"><?php echo $project['proj_role']?></p>
            <h4 class="project__content-h4">Project difficulties:</h4>
            <p class="project__content-p"><?php echo $project['proj_diff']?></p>
            <h4 class="project__content-h4">My solution:</h4>
            <p class="project__content-p"><?php echo $project['proj_solu']?></p>
        </div>
    </div>
    <?php } ?>
</div>