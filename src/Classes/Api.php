<?php
namespace ListingsApp\Classes;

class Api {
    public static function getListingsFromApi(): array {
        $request = curl_init("https://dev.maydenacademy.co.uk/resources/property-feed/properties.json");
//        curl_setopt($request, CURLOPT_URL, "https://dev.maydenacademy.co.uk/resources/property-feed/properties.json");
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($request);
        var_dump($output);
        curl_close($request);
    }

    private static function getTypesFromApi(): array {

    }

    private static function getStatusesFromApi(): array {

    }
}
