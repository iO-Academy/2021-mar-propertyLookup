<?php


namespace ListingsApp\Classes;

/**
 * Class ListingWindow
 * namespace ListingsApp\Classes
 */
class ListingWindow
{
    /**
     * @param $listing - a hydrated Listing object
     * @return string - HTML content to display on listing.php
     */
    static function displayListing($listing): string
    {
        $result = '<img src ="https://dev.io-academy.uk/resources/property-feed/images/' . $listing->getImage() . '" alt="Image of the selected Listing"/>';
        $result .= '<div class= "infoDisplay">';
        $result .= '<p>'. $listing->getAddress2() . '</p>';
        $result .= '<p>' . $listing->getBedrooms() . ' Bedrooms</p>';
        $result .= '<p>' . $listing->getStatus() . '</p>';
        $result .= '<p class="priceDisplay">' . number_format($listing->getPrice()) . '</p>' ;
        $result .= '<p>' . $listing->getAgentRef() . '</p>';
        $result .= '</div>';
        $result .= '<div class="descriptionDisplay">';
        $result .= '<h3>Description</h3>';
        $result .= '<p>' . $listing->getDescription() . '</p>';
        $result .= '</div>';
        return  $result;
    }
}