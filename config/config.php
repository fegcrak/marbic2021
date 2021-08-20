<?php

$nombre_carpeta = str_replace('C:\\xampp\\htdocs\\', '/', __DIR__);
$nombre_carpeta = str_replace('config', '', $nombre_carpeta);
if ( !defined("ROOT") ){
    define("ROOT", "http://".$_SERVER['HTTP_HOST'] . $nombre_carpeta );
}
