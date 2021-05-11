<?php
namespace ListingsApp\Classes;
class DBPopulator {
    private object $listingAPI;
    private $dbConnection;
    public function __construct($listingAPI) {
        $this->listingAPI = $listingAPI;
    }
}
