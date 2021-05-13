<?php

use ListingsApp\Classes\DBPopulator;
use ListingsApp\Classes\ListingAPI;
require_once 'vendor/autoload.php';
$db = new PDO('mysql:host=db;dbname=listings-feed', 'root', 'password');
$listingAPI = new ListingAPI();
$dbPopulator = new DBPopulator($listingAPI, $db);


$dbPopulator->populateDBAllTables();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="normalize" href="app/css/normalize.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="app/css/style.css"/>
    <title>Solid Properties</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h5>The database has been updated</h5>
</body>
</html>

