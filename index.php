<?php
use ListingsApp\Classes\Api;
require_once 'vendor/autoload.php';

$trial = new Api();
var_dump($trial->getStatusesFromApi());
var_dump($trial->getTypesFromApi());
var_dump($trial->getListingsFromApi());


