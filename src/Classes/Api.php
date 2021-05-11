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

    private function decodeJson() {
        json_decode(curl_exec($this->request));
    }

    private function curlRequest($endpoint) {
        curl_setopt($this->request, CURLOPT_URL, "https://dev.io-academy.uk/resources/property-feed/$endpoint.json");
        curl_setopt($this->request, CURLOPT_RETURNTRANSFER, 1);
    }

    public function getListingsFromApi(): array {
        $this->curlRequest('properties');
        $this->allListings = json_decode(curl_exec($this->request));
        return $this->allListings;
    }

    public function getTypesFromApi(): array {

        $this->curlRequest('types');
        $this->lettingTypes = json_decode(curl_exec($this->request));
        return $this->lettingTypes;
    }

    public function getStatusesFromApi(): array {

        $this->curlRequest('statuses');
        $this->lettingStatuses= json_decode(curl_exec($this->request));
        return $this->lettingStatuses;
    }

    public function __destruct() {
        curl_close($this->request);
    }
}
