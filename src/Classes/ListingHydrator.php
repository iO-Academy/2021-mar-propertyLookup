<?php
namespace ListingsApp\Classes;
use Listing;
use ListingsApp\Classes\ListingWindow;
use PDO;
$db = new PDO('mysql:host=db;dbname=listings-feed', 'root', 'password');

class ListingHydrator
{
    private PDO $dbConnection;
    public function __construct($db) {
        $this->dbConnection = $db;
    }
    public static function getAllListings($db)
    {
        $query = $db->prepare("SELECT `agent_ref`, `address_1`, `address_2`, `town`, `postcode`, `description`, `bedrooms`, `price`, `image`, `type`, `status` FROM `listings`;");
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class);
        $query->execute();
        return $query->fetchAll();
    }
}


$listings = ListingHydrator::getAllListings($db);
echo '<pre>';
var_dump($listings);
echo '</pre>';