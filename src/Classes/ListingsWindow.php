<?php

namespace ListingsApp\Classes;

/**
 * Class ListingsWindow
 * @package ListingsApp\Classes
 */

class ListingsWindow
{
    /**
     * displays each property listing
     * @param $listing - a hydrated Listing object
     * @return string - HTML content to display on listing.php
     */
    static function displayListings(array $listings): string
    {
        $result = '';
        foreach($listings as $listing) {
            $agentRef = $listing->getAgentRef();
            $result .= "<div class='listingCard card' style='width: 18rem;'>";
            $result .= '<img class="card-img-top" alt="Image of property" src="https://dev.io-academy.uk/resources/property-feed/images/' . $listing->getImage() . '"/>';
            $result .= '<div class= "listingInfo">';
            $result .= '<h5 class="priceDisplay">' . '£' . number_format($listing->getPrice()) . '</h5>';
            $result .= '<ul class="list-group list-group-flush">';
            $result .= '<li>' . $listing->getAddress2() . ', ' . $listing->getTown() . '</li>';
            $result .= '<li>' . $listing->getPostcode() . '</li>';
            $result .= '<li>' . $listing->getStatus() . '</li>';
            $result .= '<li>' . $listing->getBedrooms() . ' Bedrooms';
            $result .= '</ul>';
            $result .= '<div class="viewPropertyButton">';
            $result .= '<a href="listing.php?agentRef=' . $agentRef .' "><button type="button" class="btn btn-primary btn-sm"><span>View property</span></button></a>';
            $result .= '</div>';
            $result .= '</div>';
            $result .= '</div>';
        }
        return $result;
    }
}
