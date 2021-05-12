<?php

namespace ListingsApp\Classes;
require_once '../../vendor/autoload.php';

use PDO;

class ListingsWindow
{
    /**
     * @param $listing - a hydrated Listing object
     * @return string - HTML content to display on listing.php
     */
    public static function displayListings($listing): string
    {
        $result = '<img src ="https://dev.io-academy.uk/resources/property-feed/images/' . $listing->getImage() . '"/>';
        $result .= '<p>'. $listing->getAddress2() . '</p>';
        $result .= '<p>' . $listing->getStatus() . '</p>';
        return  $result;
    }
}

$db = new PDO;
$listing = new ListingHydrator();
$listing::getListingsByType($db, $_GET["type"]);
$display = new ListingsWindow();
$display::displayListings($listing);