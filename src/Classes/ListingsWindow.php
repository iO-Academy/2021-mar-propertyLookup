<?php


namespace ListingsApp\Classes;
use PDO;

//<a href="index.php?type=1">Sales</a>
//<a href="index.php?type=2">Lettings</a>

class ListingsWindow
{

    public static function displayListings($data): string
    {

    }

}

//$type = $_GET["type"];
//if (isset($type)){
//    if ($type === 'sales') {
//        //return displayListing(sales)
//    }
//    if ($type === 'lettings') {
//        //return ListingHydrator::getForLetListings($db);
//    }
//}