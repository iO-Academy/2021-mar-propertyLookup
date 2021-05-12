<?php
namespace ListingsApp\Classes;
use Listing;
use PDO;

class ListingHydrator
{
    public static function getAllListings(PDO $db)
    {
        $query = $db->prepare("SELECT `agent_ref`, `address_1`, `address_2`, `town`, `postcode`, `description`, `bedrooms`, `price`, `image`, `type`, `status` FROM `listings`;");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class);
        return $query->fetchAll();
    }
}