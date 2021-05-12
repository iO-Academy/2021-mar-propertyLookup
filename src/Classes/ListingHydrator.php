<?php


namespace ListingsApp\Classes;


/**
 * Class ListingHydrator
 * @package ListingsApp\Classes
 */

class ListingHydrator
{
    /**
     * get listings from database by type
     * @param PDO $db
     * @param string $type
     * @return array
     */
    public static function getListingsByType(PDO $db, int $type): array
    {
        $query = $db->prepare('SELECT `agent_ref`, `address_1`,  `address_2`, `town`, `postcode`,  `description`, `bedrooms`, `price`, `image`, `status_name` 
            AS `status` 
            FROM `listings` 
            INNER JOIN `statuses`
            ON `listings`.`status` = `statuses`.`id`
            WHERE `type`= :type;');
        $query->bindParam('type', $type);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class );
        return $query->fetchAll();
    }
}
