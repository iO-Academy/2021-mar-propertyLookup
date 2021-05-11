<?php


namespace ListingsApp\Classes;
use PDO;

//<a href="index.php?type=sales">Sales Listings</a>

class ListingsWindow
{
    public static function displayListings() {
        if (isset($_GET)){
            if ($_GET['type']==='sales') {
                return ListingHydrator::getForSaleListings($db);
            }
                if ($_GET['type']==='lettings') {
                    return ListingHydrator::getForLetListings($db);
                }
                if($_GET['type']==='all') {
                    return ListingHydrator::getAllListings();
                }
        } return ListingHydrator::getAllListings();
    }
}