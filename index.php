<?php
use ListingsApp\Classes\ListingAPI;
use ListingsApp\Classes\DBPopulator;
require_once 'vendor/autoload.php';

$trial = new ListingAPI();
var_dump($trial->getStatusesFromApi());
var_dump($trial->getTypesFromApi());
var_dump($trial->getListingsFromApi());

$test = new DBPopulator();

$api = new ListingAPI();
echo '<pre>';
var_dump($api->getTypesFromApi());
echo '</pre>';



