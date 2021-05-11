<?php
namespace ListingsApp\Classes;

class Api {
    public static function getListingsFromApi(): string {
        $request = curl_init();
        curl_setopt($request, CURLOPT_URL, "https://dev.io-academy.uk/resources/property-feed/properties.json");
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($request);
        curl_close($request);
        return $output;
    }

    private static function getTypesFromApi(): array {

    }

    private static function getStatusesFromApi(): array {

    }
}
