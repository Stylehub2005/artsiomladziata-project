
<?php

$dbhost = "localhost";
$dbname = "test_bd";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);



function get_singles() {
    global $db;
    $singles = $db->query("SELECT * FROM banner");
    return $singles;
}

function get_clients(){
    global $db;
    $clients = $db->query("SELECT * FROM klient_sales");
    return $clients;
}

function get_shoes(){
    global $db;
    $shoes = $db->query("SELECT * FROM shoes1");
    return $shoes;
}

function get_shoes2(){
    global $db;
    $shoes2= $db->query("SELECT * FROM shoes2");
    return $shoes2;
}

function get_sales_shoes(){
    global $db;
    $sales_shoes = $db->query("SELECT * FROM rozsah_sale");
    return $sales_shoes;
}



