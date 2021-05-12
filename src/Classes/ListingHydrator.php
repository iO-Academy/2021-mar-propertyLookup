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
     * @param PDO $db
     * @param string $agentRef - string delivered to listing.php via GET request
     * @return Listing - a fully hydrated Listing object
     */
    public function getListing(PDO $db, string $agentRef): Listing
    {
        $query= $db->prepare('SELECT * FROM `listings` WHERE `agent_ref` = :agentRef;');
        $query->bindParam('agentRef', $agentRef);
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class);
        $query->execute();
        return $query->fetch();
    }
}