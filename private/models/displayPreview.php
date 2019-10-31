<?php
function displayPreview() {
    //    Empty array
    $data = [];
    //    Connects to database
    $connection = dbConnect();

    //    Selects everything from my database from table protfolio-projects
    $sql = 'SELECT * FROM `portfolio-projects` ORDER BY `proj_id` DESC LIMIT 4';
    $stmt = $connection->query($sql);

    if ($stmt->rowCount()) {
        $data = $stmt->fetchAll();
    }
    return $data;
}
?>


