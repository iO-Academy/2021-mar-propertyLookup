<?php
namespace ListingsApp\Classes;
class DBPopulator {
    private object $listingAPI;
    private $dbConnection;
    private $listings;
    public function __construct($listingAPI, $db) {
        $this->listingAPI = $listingAPI;
        $this->dbConnection = $db;
        $this->populateDBAllTables();
    }
    private function populateDBListingsTable() {
        $this->emptyDB('listings');
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

    private function populateDBTypesTable() {
        $this->emptyDB('types');
        $this->listings = $this->listingAPI->getTypesFromApi();
        foreach ($this->listings as $listing) {
            $query = $this->dbConnection->prepare('INSERT INTO `types` (`TYPE_NAME`) VALUES (:type_name);');
            $query->bindParam(':type_name', $listing->TYPE_NAME);
            $query->execute();
        }
    }

    private function populateDBStatusesTable() {
        $this->emptyDB('statuses');
        $this->listings = $this->listingAPI->getStatusesFromApi();
        foreach ($this->listings as $listing) {
            $query = $this->dbConnection->prepare('INSERT INTO `statuses` (`STATUS_NAME`) VALUES (:status_name);');
            $query->bindParam(':status_name', $listing->STATUS_NAME);
            $query->execute();
        }
    }

    private function emptyDB($tableName) {
      $emptyTableQuery = "TRUNCATE TABLE `$tableName`";
      $statement = $this->dbConnection->prepare($emptyTableQuery);
      $statement->execute();
    }

    public function populateDBAllTables() {
    $this->populateDBListingsTable();
    $this->populateDBStatusesTable();
    $this->populateDBTypesTable();
    }
}
