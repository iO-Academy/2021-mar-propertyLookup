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
// SELECT c1, c2
//FROM t1
//INNER JOIN t2 ON condition;
        $query = $db->prepare('SELECT agent_ref, address_1,  address_2, town, postcode,  description, bedrooms, price, image, status  FROM `listings` WHERE `type` = :type;');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class );
        return $query->fetchAll();
    }
}