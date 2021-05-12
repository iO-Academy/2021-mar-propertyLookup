<?php


namespace ListingsApp\Classes;
require_once '../../vendor/autoload.php';

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

$db = getDB();
$newListing = new ListingHydrator();
echo '<pre>';
var_dump($newListing::getForSaleListings($db));
echo '</pre>';