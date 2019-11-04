<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-11
 * Time: 09:52
 */
?>
<div class="portfolio__main">
    <div class="portfolio__header">
        <h2 class="portfolio__header-h2">Portfolio projects</h2>
        <div class="icon-scroll"></div>
    </div>
</div>

<div class="searchbar">
    <div class="searchbar__form">
<!--        <form action="" method="post">-->
<!--            <input type="submit" value="Search">-->
<!--            <input type="text" name="search" placeholder="search here">-->
<!--        </form>-->
    </div>
</div>

<div class="portfolio__content">
    <h2 class="display__content-preview-h2">My Projects</h2>
    <div class="portfolio__container-wrap">
    <?php foreach ($portfolio as $project) { ?>
    <div class="portfolio__container">
        <a href="project/<?php echo $project['proj_slug']?>">
            <div class="portfolio__preview-content">
                <img src="<?php echo url('/img/' . $project['proj_img']) ?>" alt="" class="portfolio__preview-content-img">
                <h3 class="portfolio__preview-content-h3"><?php echo $project['proj_name'] ?></h3>
                <h4 class="portfolio__preview-content-h4"><?php echo $project['proj_tag'] ?></h4>
            </div>
        </a>
    </div>
    <?php } ?>
    </div>
</div>