<?php
namespace ListingsApp\Classes;

class Api {
    private $request;
    private $allListings;
    private $lettingTypes;
    private $lettingStatuses;

    public function __construct() {
        $this->request = curl_init();
    }

    private function curlRequest($endpoint) {
        curl_setopt($this->request, CURLOPT_URL, "https://dev.io-academy.uk/resources/property-feed/$endpoint.json");
        curl_setopt($this->request, CURLOPT_RETURNTRANSFER, 1);
        return curl_exec($this->request);
    }

    public function getListingsFromApi(): array {
        return $this->allListings = json_decode($this->curlRequest('properties'));
    }

    public function getTypesFromApi(): array {
        return $this->lettingTypes = json_decode($this->curlRequest('types'));
    }

    public function getStatusesFromApi(): array {
        return $this->lettingStatuses = json_decode($this->curlRequest('statuses'));
    }

    public function __destruct() {
        curl_close($this->request);
    }
}
