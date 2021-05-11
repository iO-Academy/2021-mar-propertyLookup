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
    public function getListingsFromApi(): array {

        curl_setopt($this->request, CURLOPT_URL, "https://dev.io-academy.uk/resources/property-feed/properties.json");
        curl_setopt($this->request, CURLOPT_RETURNTRANSFER, 1);
        $this->allListings = json_decode(curl_exec($this->request));

        return $this->allListings;
    }

    public function getTypesFromApi(): array {

        curl_setopt($this->request, CURLOPT_URL, "https://dev.io-academy.uk/resources/property-feed/types.json");
        curl_setopt($this->request, CURLOPT_RETURNTRANSFER, 1);
        $this->lettingTypes = json_decode(curl_exec($this->request));
        return $this->lettingTypes;
    }

    public function getStatusesFromApi(): array {

        curl_setopt($this->request, CURLOPT_URL, "https://dev.io-academy.uk/resources/property-feed/statuses.json");
        curl_setopt($this->request, CURLOPT_RETURNTRANSFER, 1);
        $this->lettingStatuses= json_decode(curl_exec($this->request));
        return $this->lettingStatuses;
    }

    public function __destruct() {
        curl_close($this->request);
    }
}
