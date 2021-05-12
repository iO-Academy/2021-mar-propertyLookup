<?php


namespace ListingsApp\Classes;
$db = new PDO('mysql:host=db;dbname=listings-feed', 'root', 'password');


class ListingHydrator
{
    private object $dbConnection;
    public function __construct($db) {
        $this->dbConnection = $db;
    }
    public function getAllListing(): Listing
    {
        $query= $this->dbConnection->prepare("SELECT `agent_ref`, `address_1`, `address_2`, `town`, `postcode`, `description`, `bedrooms`, `price`, `image`, `type`, `status` FROM `listings`;");
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class);
        $query->execute();
        return $query->fetch();
    }
}

$listingHydrator = new ListingHydrator($db);
var_dump($listingHydrator);