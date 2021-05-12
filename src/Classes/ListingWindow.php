<?php


namespace ListingsApp\Classes;


class ListingWindow
{
    static function displayListing($listing): string
    {
        $result = '<img src ="https://dev.io-academy.uk/resources/property-feed/images/';
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
        $result .= $listing->getStatus();
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

    static function displayListings(array $listings): string
    {
        $result = '';
        foreach($listings as $listing) {
            $result .= "<div class='listingCard card' style='width: 18rem;'>";
            $result .= '<img class="card-img-top" alt="Image of property" src="https://dev.io-academy.uk/resources/property-feed/images/' . $listing->getImage() . '"/>';
            $result .= '<div class= "listingInfo">';
            $result .= '<h5 class="priceDisplay">' . number_format($listing->getPrice()) . '</h5>';
            $result .= '<ul class="list-group list-group-flush">';
            $result .= '<li>' . $listing->getAddress2() . ', ' . $listing->getTown() . '</li>';
            $result .= '<li>' . $listing->getPostcode() . '</li>';
            $result .= '<li>' . $listing->getStatus() . '</li>';
            $result .= '<li>' . $listing->getBedrooms() . ' Bedrooms';
            $result .= '<div>';
            $result .= '<button type="button" class="btn btn-primary btn-sm"><span>View property</span></button>';
            $result .= '</div>';
            $result .= '</div>';
            $result .= '</div>';
        }
        return $result;
    }
}