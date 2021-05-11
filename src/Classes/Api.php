<?php
namespace ListingsApp\Classes;
/**
 * send api request to receive listings data
 */
class Api {
    private $request;
    private array $allListings;
    private array $lettingTypes;
    private array $lettingStatuses;

    /**
     * Api constructor.
     */
    public function __construct() {
        $this->request = curl_init();
        var_dump($this->request);
    }

    /**
     * sends specific api request depending on the $endpoint
     * @param $endpoint
     * @return bool|string
     */
    private function curlRequest(string $endpoint): string {
        curl_setopt($this->request, CURLOPT_URL, "https://dev.io-academy.uk/resources/property-feed/$endpoint.json");
        curl_setopt($this->request, CURLOPT_RETURNTRANSFER, 1);
        return curl_exec($this->request);
    }

    /**
     * getting all listings from the api and turn into array
     * @return array
     */
    public function getListingsFromApi(): array {
        return $this->allListings = json_decode($this->curlRequest('properties'));
    }

    /**
     * getting types from API and turn into array
     * @return array
     */
    public function getTypesFromApi(): array {
        return $this->lettingTypes = json_decode($this->curlRequest('types'));
    }

    /**
     * getting statuses from api and turn into array
     * @return array
     */
    public function getStatusesFromApi(): array {
        return $this->lettingStatuses = json_decode($this->curlRequest('statuses'));
    }

    /**
     * ends curl request after all data is got
     */
    public function __destruct() {
        curl_close($this->request);
    }
}
