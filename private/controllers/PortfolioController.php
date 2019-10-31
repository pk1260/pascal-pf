<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-04
 * Time: 11:19
 */

class PortfolioController {
    function portfoliopage(){
        $portfolio = displayPreview();
        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/portfolio.php';
        include __DIR__ . '/../views/footer.php';
    }
}