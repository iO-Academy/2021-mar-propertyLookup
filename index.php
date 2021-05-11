<?php
use ListingsApp\Classes\Example;
require_once 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="normalize" href="app/css/normalize.css"/>
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
        <div class="boostrapNavbar">

        </div>
    </div>
    <div class="pageContent">

    </div>
</body>
</html>
