<?php
namespace ListingsApp\Classes;
use PDO;

/**
 * Class ListingHydrator
 * namespace - ListingsApp\Classes
 */
class ListingHydrator
{
    protected PDO $dbConnection;
    /**
     * ListingHydrator constructor.
     * @param $db
     */
    public function __construct($db) {
        $this->dbConnection = $db;
    }
    /**
     * FETCH_PROPS_LATE - hydrates Listing class AFTER constructor has run
     *
     * @param string $agentRef - string delivered to listing.php via GET request
     * @return Listing - a fully hydrated Listing object
     */
    public function getListing(string $agentRef): Listing
    {
        $query= $this->dbConnection->prepare('SELECT `agent_ref`, `address_1`,  `address_2`, `town`, `postcode`,  `description`, `bedrooms`, `price`, `image`, `type`, `status_name` AS `status` FROM `listings` INNER JOIN `statuses` ON `listings`.`status` = `statuses`.`id` WHERE `agent_ref` = :agentRef;');
        $query->bindParam('agentRef', $agentRef);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Listing::class);
        $query->execute();
        return $query->fetch();
    }

    /**
     * gets all listings from db table listings
     * @return array
     */
    public function getAllListings(): array
    {
        $query = $this->dbConnection->prepare("SELECT `agent_ref`, `address_1`, `address_2`, `town`, `postcode`, `description`, `bedrooms`, `price`, `image`, `type`, `status_name` AS `status` FROM `listings` INNER JOIN `statuses` ON `listings`.`status` = `statuses`.`id`;");
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Listing::class);
        $query->execute();
        return $query->fetchAll();
    }
}