<?php


namespace ListingsApp\Classes;
use PDO;

class ListingHydrator
{
    public static function getListing(PDO $db, string $agent_ref): Listing
    {
        $query= $db->prepare("SELECT `AGENT_REF` AS 'agent_ref', `ADDRESS_1` AS 'address_1', `ADDRESS_2` AS 'address_2', `TOWN` AS 'town', `POSTCODE` AS 'postcode', `DESCRIPTION` AS 'description', `BEDROOMS` AS 'bedrooms', `PRICE` AS 'price', `IMAGE` AS 'image', `TYPE` AS 'type', `STATUS` AS 'status' FROM `listings` WHERE `AGENT_REF` = 'CSL123_100259';");
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class);
        $query->execute();
        return $query->fetch();
    }

    /**
     * gets all listings from db table listings
     * @param PDO $db
     * @return array
     */
    public static function getAllListings(PDO $db): array
    {
        $query = $db->prepare("SELECT `agent_ref`, `address_1`, `address_2`, `town`, `postcode`, `description`, `bedrooms`, `price`, `image`, `type`, `status` FROM `listings`;");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class);
        return $query->fetchAll();
    }

    private function fetchExecute() {
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class);
    }
}