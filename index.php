<?php
use ListingsApp\Classes\ListingAPI;
require_once 'vendor/autoload.php';

$trial = new ListingAPI();
var_dump($trial->getStatusesFromApi());
var_dump($trial->getTypesFromApi());
var_dump($trial->getListingsFromApi());


