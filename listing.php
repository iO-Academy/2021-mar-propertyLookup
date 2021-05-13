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
    <link rel="normalize" href="app/css/normalize.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="app/css/style.css"/>
    <title>Solid Properties</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="header">
    <div class="basicNavbar">
        <div class="basicNavbarButtons">
            <a href="index.php?type=all"><button class="allBtn navButtons" >All</button></a>
            <a href="index.php?type=sales"><button class="salesBtn navButtons">Sales</button></a>
            <a href="index.php?type=lettings"><button class="lettingsBtn navButtons">Lettings</button></a>
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

       $agentRef= $_GET['agentRef'];

        $hydrator = new ListingHydrator();

        $listing = $hydrator->getListing($db, $agentRef);

        echo ListingWindow::displayListing($listing)
    ?>

</section>


</body>
</html>