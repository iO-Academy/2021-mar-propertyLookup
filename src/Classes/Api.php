<?php
namespace ListingsApp\Classes;

class Api {
    public static function getListingsFromApi(): array {
        $request = curl_init();
        curl_setopt($request, CURLOPT_URL, "https://dev.io-academy.uk/resources/property-feed/properties.json");
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        $output = json_decode(curl_exec($request));
        curl_close($request);
        return $output;
    }

    public static function getTypesFromApi(): array {
        $request = curl_init();
        curl_setopt($request, CURLOPT_URL, "https://dev.io-academy.uk/resources/property-feed/types.json");
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        $output = json_decode(curl_exec($request));
        curl_close($request);
        return $output;
    }

    public static function getStatusesFromApi(): array {
        $request = curl_init();
        curl_setopt($request, CURLOPT_URL, "https://dev.io-academy.uk/resources/property-feed//statuses.json");
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        $output = json_decode(curl_exec($request));
        curl_close($request);
        return $output;
    }
}
