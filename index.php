<?php
require_once __DIR__."/models/database.php";

date_default_timezone_set('Asia/Tehran');
$request = $_SERVER['REQUEST_URI'];

switch ($request){
    case '/avamusic/home':
    case '/avamusic/':
    case '/avamusic/index':
        require __DIR__ ."/controllers/index.php";
        break;

    default:
        die("404");
}
?>