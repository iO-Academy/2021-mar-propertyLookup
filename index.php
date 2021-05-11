<?php
use ListingsApp\Classes\ListingAPI;
use ListingsApp\Classes\DBPopulator;
require_once 'vendor/autoload.php';
$db = new PDO('mysql:host=db;dbname=listings-feed', 'root', 'password');
$listingAPI = new ListingAPI();
$dbPopulator = new DBPopulator($listingAPI, $db);


echo '<pre>';
$dbPopulator->populateDBTypesTable();
echo '</pre>';

