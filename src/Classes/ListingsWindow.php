<?php


namespace ListingsApp\Classes;
use PDO;

//<a href="index.php?type=sales">Sales</a>
//<a href="index.php?type=lettings">Lettings</a>

class ListingsWindow
{
    public static function displayListings()
    {
        $type = $_GET["type"];
        if (isset($type)){
            if ($type === 'sales') {
                //return ListingHydrator::getForSaleListings($db);
            }
                if ($type === 'lettings') {
                    //return ListingHydrator::getForLetListings($db);
                }
        }
    }
}