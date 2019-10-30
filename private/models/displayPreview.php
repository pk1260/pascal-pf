<?php
function displayPreview() {
//    Empty data array
    $data = [];
//    Database connection
    $connection = dbConnect();

//    Selecting all data from my database
    $sql = 'SELECT * FROM `portfolio-projects`';
    $stmt = $connection->query($sql);

    if ($stmt->rowCount()) {
        $data = $stmt->fetchAll();
    }
    return $data;
}
?>


