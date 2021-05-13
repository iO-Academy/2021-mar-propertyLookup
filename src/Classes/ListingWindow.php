<?php


namespace ListingsApp\Classes;

/**
 * Class ListingWindow
 * namespace ListingsApp\Classes
 */
class ListingWindow
{
    /**
     * @param Listing $listing - a hydrated Listing object
     * @return string - HTML content to display on listing.php
     */
    static function displayListing(Listing $listing): string
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

    /**
     * displaying the listings in HTML on index.php
     * @param array $listings
     * @return string
     */
    static function displayListings(array $listings): string
    {
        $result = '';
        foreach ($listings as $listing) {
            $agentRef = $listing->getAgentRef();
            $price = intval($listing->getPrice());
            $result .= '<div class="listingCard card">';
            $result .= '<img class="card-img-top" alt="Property for sale at ' . $listing->getAddress2() . '" src="https://dev.io-academy.uk/resources/property-feed/images/' . $listing->getImage() . '"/>';
            $result .= '<div class= "listingInfo">';
            $result .= '<h5 class="priceDisplay">' . number_format($price) . '</h5>';
            $result .= '<ul class="list-group list-group-flush">';
            $result .= '<li>' . $listing->getAddress2() . ', ' . $listing->getTown() . '</li>';
            $result .= '<li>' . $listing->getPostcode() . '</li>';
            $result .= '<li>' . $listing->getStatus() . '</li>';
            $result .= '<li>' . $listing->getBedrooms() . ' Bedrooms</li>';
            $result .= '</ul>';
            $result .= '<div class="viewPropertyLink">';
            $result .= '<a href="listing.php?agentRef=' . $agentRef . '">View property</a>';
            $result .= '</div>';
            $result .= '</div>';
            $result .= '</div>';
        }
        return $result;
    }
}