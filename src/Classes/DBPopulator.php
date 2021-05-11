<?php
namespace ListingsApp\Classes;
class DBPopulator {
    private object $listingAPI;
    private $dbConnection;
    private $listings;
    public function __construct($listingAPI, $db) {
        $this->listingAPI = $listingAPI;
        $this->dbConnection = $db;
    }

    public function populateDBListingsTable() {
        $this->listings = $this->listingAPI->getListingsFromApi();
        foreach($this->listings as $listing) {
            $query = $this->dbConnection->prepare('INSERT INTO `listings` (`AGENT_REF`, `ADDRESS_1`, `ADDRESS_2`, `TOWN`, `POSTCODE`, `DESCRIPTION`, `BEDROOMS`, `PRICE`, `IMAGE`, `TYPE`, `STATUS`) VALUES (:agent_ref, :address_1, :address_2, :town, :postcode, :description, :bedrooms, :price, :image, :type, :status);');
            $query->bindParam(':agent_ref', $listing->AGENT_REF);
            $query->bindParam(':address_1', $listing->ADDRESS_1);
            $query->bindParam(':address_2', $listing->ADDRESS_2);
            $query->bindParam(':town', $listing->TOWN);
            $query->bindParam(':postcode', $listing->POSTCODE);
            $query->bindParam(':description', $listing->DESCRIPTION);
            $query->bindParam(':bedrooms', $listing->BEDROOMS);
            $query->bindParam(':price', $listing->PRICE);
            $query->bindParam(':image', $listing->IMAGE);
            $query->bindParam(':type', $listing->TYPE);
            $query->bindParam(':status', $listing->STATUS);
            $query->execute();
        }
    }
}
