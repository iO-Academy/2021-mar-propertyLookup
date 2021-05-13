<?php


namespace ListingsApp\Classes;

/**
 * view helper design pattern
 * Class ListingWindow
 * @package ListingsApp\Classes
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
        $result = '<img src ="https://dev.io-academy.uk/resources/property-feed/images/' . $listing->getImage() . '"/>';
        $result .= '<div class= "infoDisplay">';
        $result .= '<p>'. $listing->getAddress2() . '</p>';
        $result .= '<p>' . $listing->getBedrooms() . ' Bedrooms </p>';
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

    /**
     * displaying the listings in HTML on index.php
     * @param array $listings
     * @return string
     */
    static function displayListings(array $listings): string
    {
        $result = '';
        foreach($listings as $listing) {
            $agentRef = $listing->getAgentRef();
            $result .= "<div class='listingCard card' style='width: 18rem;'>";
            $result .= '<img class="card-img-top" alt="Property for sale at ' . $listing->getAddress2() . '" src="https://dev.io-academy.uk/resources/property-feed/images/' . $listing->getImage() . '"/>';
            $result .= '<div class= "listingInfo">';
            $result .= '<h5 class="priceDisplay">' . number_format($listing->getPrice()) . '</h5>';
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