<?php
require_once 'vendor/autoload.php';
use ListingsApp\Classes\Listing;
use ListingsApp\Classes\ListingHydrator;
use ListingsApp\Classes\ListingWindow;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="normalize" href="app/css/normalize.css"/>
    <link rel="stylesheet" href="app/css/style.css"/>
    <title>Solid Properties</title>
</head>
<body>
<div class="header">
    <div class="basicNavbar">
        <div class="basicNavbarButtons">
            <button id="allBtn">All</button>
            <button id="salesBtn">Sales</button>
            <button id="lettingsBtn">Lettings</button>
        </div>
    </div>
    <div class="jumbotron">
        <div class="overlay">
            <h1>SOLID</h1>
            <h2>Properties</h2>
        </div>
    </div>
</div>

<section id="listingDisplay">
    <?php
        $db = new PDO("mysql:host=db; dbname=listings-feed", "root", "password");

        $agentRef = 'CSL123_100259';

        $hydrator = new ListingHydrator();

        $listing = $hydrator->getListing($db, $agentRef);

        echo ListingWindow::displayListing($listing)
    ?>

</section>


</body>
</html>