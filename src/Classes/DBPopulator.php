<?php
namespace ListingsApp\Classes;
class DBPopulator {
    private object $listingAPI;
    private $dbConnection;
    public function __construct($listingAPI, $db) {
        $this->listingAPI = $listingAPI;
        $this->dbConnection = $db;
    }

    public function populateDBListingsTable() {
        $query = $this->dbConnection->prepare('INSERT INTO `property-feed` (`AGENT_REF`, `ADDRESS_1`, `ADDRESS_2`, `TOWN`, `POSTCODE`, `DESCRIPTION`, `BEDROOMS`, `PRICE`, `IMAGE`, `TYPE`, `STATUS`) VALUES ;');
    }
}
