<?php

use ListingsApp\Classes\DBPopulator;
use ListingsApp\Classes\ListingAPI;
require_once 'vendor/autoload.php';
$db = new PDO('mysql:host=db;dbname=listings-feed', 'root', 'password');
$listingAPI = new ListingAPI();
$dbPopulator = new DBPopulator($listingAPI, $db);


$dbPopulator->populateDBAllTables();