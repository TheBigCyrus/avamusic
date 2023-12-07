<?php
require_once __DIR__."/models/database.php";

date_default_timezone_set('Asia/Tehran');
$request = str_replace('/avamusic', '', $_SERVER['REQUEST_URI']);

if (isset($_GET['id']))
{
    $id = $_GET['id'];
}

switch ($request){
    case '/home':
    case '/':
    case '/index':
        require "/controllers/index.php";
        break;
    
    case "/musics":
        require "/controllers/musics.php";
        break;
    case "/albums":
        require "/controllers/albums.php";
        break;
    case "/albums?id=$id":
        require "/controllers/album.php";
        break;
        
    default:
        die("404");
}
?>