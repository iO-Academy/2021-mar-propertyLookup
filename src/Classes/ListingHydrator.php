<?php


namespace ListingsApp\Classes;

use PDO;

function getDB(): PDO
{
    $db = new PDO('mysql:host=db;dbname=estateAgent', 'root', 'password');
    return $db;
}
/**
 * Class ListingHydrator
 * @package ListingsApp\Classes
 */

class ListingHydrator
{
    public static function getForSaleListings(PDO $db): array
    {
        $query = $db->prepare('SELECT * FROM `listings` WHERE `type` = 1;');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class );
        return $query->fetchAll();
    }

    public static function getForLetListings(PDO $db): array
    {
        $query = $db->prepare('SELECT * FROM `listings` WHERE `type` = 2;');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class);
        return $query->fetchAll();
    }
}
