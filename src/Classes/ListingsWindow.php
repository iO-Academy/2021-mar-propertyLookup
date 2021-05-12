<?php

namespace ListingsApp\Classes;



class ListingsWindow
{
    /**
     * @param $listing - a hydrated Listing object
     * @return string - HTML content to display on listing.php
     */
    public static function displayListings($listing): string
    {
        $result = '';
        foreach($listing as $item){
            $result .= '<img src ="https://dev.io-academy.uk/resources/property-feed/images/' . $item->getImage() . '"/>';
            $result .= '<p>'. $item->getAddress2() . '</p>';
            $result .= '<p>' . $item->getStatus() . '</p>';
        }
        return  $result;
    }
}
