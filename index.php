<?php

require_once 'vendor/autoload.php';
use ListingsApp\Classes\Listing;
use ListingsApp\Classes\ListingHydrator;
use ListingsApp\Classes\ListingWindow;
require_once 'vendor/autoload.php';
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
    <div class="bootstrapTable salesDropdowns">
        <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Min Price
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">£100,000</a>
                    <a class="dropdown-item" href="#">£200,000</a>
                    <a class="dropdown-item" href="#">£300,000</a>
                    <a class="dropdown-item" href="#">£400,000</a>
                    <a class="dropdown-item" href="#">£500,000</a>
                    <a class="dropdown-item" href="#">£600,000</a>
                    <a class="dropdown-item" href="#">£700,000</a>
                </div>
            </div>
        <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Max Price
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">£200,000</a>
                    <a class="dropdown-item" href="#">£300,000</a>
                    <a class="dropdown-item" href="#">£400,000</a>
                    <a class="dropdown-item" href="#">£500,000</a>
                    <a class="dropdown-item" href="#">£600,000</a>
                    <a class="dropdown-item" href="#">£700,000</a>
                    <a class="dropdown-item" href="#">£800,000</a>
                    <a class="dropdown-item" href="#">£900,000</a>
                    <a class="dropdown-item" href="#">£1,000,000</a>
                </div>
            </div>
        <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Number of bedrooms
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">One</a>
                    <a class="dropdown-item" href="#">Two</a>
                    <a class="dropdown-item" href="#">Three</a>
                    <a class="dropdown-item" href="#">Four</a>
                    <a class="dropdown-item" href="#">Five or more</a>
                </div>
            </div>
    </div>
    <div class="bootstrapTable lettingDropdowns">
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Min Price
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">£700 pcm</a>
                <a class="dropdown-item" href="#">£800 pcm</a>
                <a class="dropdown-item" href="#">£900 pcm</a>
                <a class="dropdown-item" href="#">£1000 pcm</a>
            </div>
            </div>
        <div class="smallTitle">
            <h3>SOLID Properties</h3>
        </div>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Max Price
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">£800 pcm</a>
                <a class="dropdown-item" href="#">£900 pcm</a>
                <a class="dropdown-item" href="#">£1000 pcm</a>
                <a class="dropdown-item" href="#">More than £1000 pcm</a>
            </div>
        </div>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Number of bedrooms
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">One</a>
                <a class="dropdown-item" href="#">Two</a>
                <a class="dropdown-item" href="#">Three</a>
                <a class="dropdown-item" href="#">Four</a>
                <a class="dropdown-item" href="#">Five or more</a>
            </div>
        </div>
    </div>

    <div class="pageContent">
        <?php
        $db = new PDO('mysql:host=db;dbname=listings-feed', 'root', 'password');
        $listings = ListingHydrator::getAllListings($db);
        echo ListingWindow::displayListings($listings);
        ?>
    </div>

<div class="pageContent">

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


