<?php


namespace ListingsApp\Classes;


class ListingWindow
{
    static function displayListing($listing): string
    {
        $result = '';
        $result .= '<img src ="https://dev.io-academy.uk/resources/property-feed/images/';
        $result .= $listing->getImage();
        $result .= '"/>';
        $result .= '<div class= "infoDisplay">';
        $result .= '<p>';
        $result .= $listing->getAddress2();
        $result .= '</p>';
        $result .= '<p>';
        $result .= $listing->getBedrooms();
        $result .= ' Bedrooms';
        $result .= '</p>';
        $result .= '<p>';
        if ($listing->getStatus() === 1) {
            $result .= "For Sale";
        }else{
            $result .= "Sold";
        }
        $result .= '</p>';
        $result .= '<p class="priceDisplay">';
        $result .= number_format($listing->getPrice());
        $result .= '</p>';
        $result .= '<p>';
        $result .= $listing->getAgentRef();
        $result .= '</div>';
        $result .= '<div class="descriptionDisplay">';
        $result .= '<h3> Description </h3>';
        $result .= '<p>';
        $result .= $listing->getDescription();
        $result .= '</p>';
        $result .= '</div>';


        return  $result;
    }
}
