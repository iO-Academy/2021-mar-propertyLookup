<?php
use ListingsApp\Classes\ListingAPI;
use ListingsApp\Classes\DBPopulator;
require_once 'vendor/autoload.php';

$test = new DBPopulator();

$api = new ListingAPI();
echo '<pre>';
var_dump($api->getTypesFromApi());
echo '</pre>';


