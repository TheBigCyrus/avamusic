<?php
    /** @var mysqli $db */
    $statment = $db->query("SELECT albums.*, singers.Name SingerName FROM `albums` JOIN `singers` ON albums.SingerID = singers.ID  ORDER BY `ID` DESC;");

    /** @var array $albums */
    $albums = [];

    if ($statment->num_rows) {
        while ($record = $statment->fetch_assoc())
        {
            $albums[] = $record;
        } 
    }

    $title = "صفحه آلبوم ها";
    
    require_once "views/header.php";
    require_once "views/navbar.php";
    require_once "views/albums.php";
?>