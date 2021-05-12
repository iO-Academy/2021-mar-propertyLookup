<?php


namespace ListingsApp\Classes;

/**
 * Class ListingHydrator
 * @package ListingsApp\Classes
 */

class ListingHydrator
{
    /**
     * @param PDO $db
     * @param string $type
     * @return array
     */
    public static function getListingsByType(PDO $db, string $type): array
    {
        $query = $db->prepare('SELECT * FROM `listings` WHERE `type` = :type;');
        $query->bindParam('type', $type);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class );
        return $query->fetchAll();
    }
}