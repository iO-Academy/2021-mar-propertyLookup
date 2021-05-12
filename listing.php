<?php
require_once 'vendor/autoload.php';
use ListingsApp\Classes\Listing;
use ListingsApp\Classes\ListingWindow;
$newListing = new Listing("CSL123_100259","Hill Farm","Plough Hill Road","Nuneaton","CV11 6PE","This is a rare opportunity...",6,355000,"CSL123_100327_IMG_00.JPG",1,1);
$newListingWindow= new ListingWindow();
ListingWindow::displayListing($newListing);
echo ListingWindow::displayListing($newListing);

?>
<html>

<section>
    <img>
    <div>
     <div>
     <p> </p>
     <p> </p>
     <p> </p>
     <p> </p>
     <p> </p>
     </div>
     <div>
        <h5></h5>
         <p></p>

     </div>


    </div>
</html>





</section>