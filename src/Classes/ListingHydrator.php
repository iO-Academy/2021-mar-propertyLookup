<?php


namespace ListingsApp\Classes;

/**
 * Class ListingHydrator
 * @package ListingsApp\Classes
 */

class ListingHydrator
{
    // Still needs:
        // getIndividualListing();
         // getListings();

    public static function getForSaleListings(PDO $db)
    {
        $query = $db->prepare('SELECT * FROM `listings` WHERE `type` = 1;');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class );
        return $query->fetchAll();
    }

    public static function getForLetListings(PDO $db)
    {
        $query = $db->prepare('SELECT * FROM `listings` WHERE `type` = 2;');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class);
        return $query->fetchAll();
    }
}

