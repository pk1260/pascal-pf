<?php
function displayProject($id) {
//    Empty data array
    $data = [];
//    Database connection
    $connection = dbConnect();

//    Selecting all data from my database
    $sql = 'SELECT * FROM `portfolio-projects` WHERE proj_id = :id';
    $stmt = $connection->query($sql);
    $stmt->execute(['proj_id' => $id]);
    if ($stmt->rowCount()) {
        $data = $stmt->fetchAll();
    }
    return $data;
}
?>


