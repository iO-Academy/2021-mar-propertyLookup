<?php
use ListingsApp\Classes\ListingAPI;
use ListingsApp\Classes\DBPopulator;
require_once 'vendor/autoload.php';
$db = new PDO('mysql:host=db;dbname=property-feed', 'root', 'password');
var_dump($db);
$trial = new ListingAPI();
//var_dump($trial->getStatusesFromApi());
//var_dump($trial->getTypesFromApi());
//var_dump($trial->getListingsFromApi());



$api = new ListingAPI();
echo '<pre>';
var_dump($api->getTypesFromApi());
echo '</pre>';
$test = new DBPopulator($api, $db);


