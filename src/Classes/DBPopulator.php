<?php
namespace ListingsApp\Classes;
use PDO;
class DBPopulator {
    protected ListingAPI $listingAPI;
    protected PDO $dbConnection;
    protected array $listings;
    /**
     * DBPopulator constructor.
     * @param $listingAPI
     * @param $db
     */
    public function __construct(ListingAPI $listingAPI, PDO $db) {
        $this->listingAPI = $listingAPI;
        $this->dbConnection = $db;
        $this->populateDBAllTables();
    }

    /**
     * fills listings table in listings-feed db
     * @return void
     */
    protected function populateDBListingsTable(): void {
        $this->emptyDB('listings');
        $this->listings = $this->listingAPI->getListingsFromApi();
        foreach($this->listings as $listing) {
            $query = $this->dbConnection->prepare('INSERT INTO `listings` (`agent_ref`, `address_1`, `address_2`, `town`, `postcode`, `description`, `bedrooms`, `price`, `image`, `type`, `status`) VALUES (:agent_ref, :address_1, :address_2, :town, :postcode, :description, :bedrooms, :price, :image, :type, :status);');
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

    /**
     * fills types tables in listings-feed db
     * @return void
     */
    protected function populateDBTypesTable(): void {
        $this->emptyDB('types');
        $this->listings = $this->listingAPI->getTypesFromApi();
        foreach ($this->listings as $listing) {
            $query = $this->dbConnection->prepare('INSERT INTO `types` (`type_name`) VALUES (:type_name);');
            $query->bindParam(':type_name', $listing->TYPE_NAME);
            $query->execute();
        }
    }

    /**
     * fills statuses tables in listings-feed db
     * @return void
     */
    protected function populateDBStatusesTable(): void {
        $this->emptyDB('statuses');
        $this->listings = $this->listingAPI->getStatusesFromApi();
        foreach ($this->listings as $listing) {
            $query = $this->dbConnection->prepare('INSERT INTO `statuses` (`status_name`) VALUES (:status_name);');
            $query->bindParam(':status_name', $listing->STATUS_NAME);
            $query->execute();
        }
    }

    /**
     * empties each table (called before it repopulates them)
     * @param string $tableName
     * @return void
     *
     */
    private function emptyDB(string $tableName): void {
      $emptyTableQuery = "TRUNCATE TABLE `$tableName`";
      $statement = $this->dbConnection->prepare($emptyTableQuery);
      $statement->execute();
    }

    /**
     * populates all tables
     * @return void
     */
    public function populateDBAllTables(): void {
        $this->populateDBListingsTable();
        $this->populateDBStatusesTable();
        $this->populateDBTypesTable();
    }
}
