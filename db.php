
<?php

$dbhost = "localhost";
$dbname = "test_bd";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_albums() {
    global $db;
    $albums = $db->query("SELECT * FROM carousel");
    return $albums;
}


function get_singles() {
    global $db;
    $singles = $db->query("SELECT * FROM index.banner");
    return $singles;
}

function get_videos(){
    global $db;
    $videos = $db->query("SELECT * FROM klient_sales.rozsah");
    return $videos;
}

function get_career(){
    global $db;
    $career = $db->query("SELECT * FROM nas_blog.blog");
    return $career;
}

function get_music_styles(){
    global $db;
    $music_style = $db->query("SELECT * FROM reg.reg");
    return $music_style;
}

function get_info_table(){
    global $db;
    $info_table = $db->query("SELECT * FROM rozsah.rozsah");
    return $info_table;
}
function get_banners(){
    global $db;
    $banners = $db->query("SELECT * FROM sale.rozsah");
    return $banners;
}

function subscribe_blog(){
    global $db;
    $banners = $db->query("SELECT * FROM subscribe.blog");
    return $banners;
}

