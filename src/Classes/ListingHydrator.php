<?php


namespace ListingsApp\Classes;


use PDO;

/**
 * Class ListingHydrator
 * namespace - ListingsApp\Classes
 */
class ListingHydrator
{
    /**
     * FETCH_PROPS_LATE - hydrates Listing class AFTER constructor has run
     *
     * @param PDO $db
     * @param string $agentRef - string delivered to listing.php via GET request
     * @return Listing - a fully hydrated Listing object
     */
    public function getListing(PDO $db, string $agentRef): Listing
    {
        $query= $db->prepare('SELECT `agent_ref`, `address_1`,  `address_2`, `town`, `postcode`,  `description`, `bedrooms`, `price`, `image`, `type`, `status_name` AS `status` FROM `listings` INNER JOIN `statuses` ON `listings`.`status` = `statuses`.`id` WHERE `agent_ref` = :agentRef;');
        $query->bindParam('agentRef', $agentRef);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Listing::class);
        $query->execute();
        return $query->fetch();
    }

    /**
     * @param PDO $db
     * @return array of Listing objects
     */
    public static function getAllListings(PDO $db)
    {
        $query = $db->prepare("SELECT `agent_ref`, `address_1`, `address_2`, `town`, `postcode`, `description`, `bedrooms`, `price`, `image`, `type`, `status` FROM `listings`;");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class);
        return $query->fetchAll();
    }
}