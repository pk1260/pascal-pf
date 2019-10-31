<?php
function displayProject($slug) {
    //    Connects to database
    $connection = dbConnect();

    //    Selects everything from my database from table protfolio-projects by using the row proj_id
    $sql = 'SELECT * FROM `portfolio-projects` WHERE proj_slug = :proj_slug';
    $stmt = $connection->prepare($sql);
    $stmt->execute(['proj_slug' => $slug]);
    if ($stmt->rowCount()) {
        $data = $stmt->fetch();
        //    Returns the content from the database
        return $data;
    }
}
?>