<?php


namespace ListingsApp\Classes;

use PDO;

/** connects to database
 * @return PDO
 */

function getDB(): PDO
{
    return new PDO('mysql:host=db;dbname=listings-feed', 'root', 'password');

}
/**
 * Class ListingHydrator
 * @package ListingsApp\Classes
 */

class ListingHydrator
{
    /**
     * @param PDO $db
     * @return array
     */
    public static function getForSaleListings(PDO $db, $type): array
    {
        $query = $db->prepare('SELECT * FROM `listings` WHERE `type` = :type;');
        $query->bindParam('type', $type);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class );
        return $query->fetchAll();
    }

}

$db = getDB();
$newListing = new ListingHydrator();
echo '<pre>';
var_dump($newListing::getForSaleListings($db, "1"));
echo '</pre>';