<?php
require_once 'vendor/autoload.php';

use ListingsApp\Classes\Listing;
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
        $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rhoncus mi quam, tincidunt sodales purus dapibus eu. In semper a ex ut lacinia. Quisque vestibulum nec nunc vel consequat. In pharetra aliquam maximus. Nulla pulvinar tellus eget mollis facilisis. Duis tincidunt magna id placerat pretium. Cras ultricies, dolor ut porttitor laoreet, nulla magna posuere metus, ut sodales est lacus vitae arcu. Fusce vel molestie magna, sit amet finibus enim. Praesent viverra, erat eget condimentum posuere, ipsum diam imperdiet purus, cursus vulputate mauris odio ut massa. Donec molestie ipsum blandit turpis molestie, ut ultrices ante efficitur. Nulla laoreet auctor libero, eu sollicitudin dui pulvinar et.  Vivamus ultrices aliquam lobortis. Fusce quis ornare ipsum. Donec tempus elit vitae neque malesuada, elementum rutrum erat porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae risus et odio consequat imperdiet. Suspendisse laoreet turpis id rhoncus efficitur. Pellentesque commodo eros euismod ligula imperdiet, non dictum felis faucibus. Integer tellus metus, cursus in nisi quis, gravida scelerisque erat. Ut eget turpis id ipsum ullamcorper tristique. Proin lacinia, mauris nec varius condimentum, mauris urna tristique odio, id luctus risus eros quis libero. Ut in lorem aliquet, facilisis orci posuere, fringilla dolor.";
        $newListing = new Listing("CSL123_100259","Hill Farm","Plough Hill Road","Nuneaton","CV11 6PE", $string,6,355000,"CSL123_100327_IMG_00.JPG",1,1);
        echo ListingWindow::displayListing($newListing)
    ?>

</section>


</body>
</html>