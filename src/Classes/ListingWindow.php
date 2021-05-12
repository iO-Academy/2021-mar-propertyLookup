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
            $result .= '<img class="card-img-top" alt="Image of property" src="https://dev.io-academy.uk/resources/property-feed/images/';
            $result .= $listing->getImage();
            $result .= '"/>';
            $result .= '<div class= "infoDisplay">';
            $result .= '<h5 class="card-title priceDisplay">';
            $result .= number_format($listing->getPrice());
            $result .= '</h5>';
            $result .= '<ul class="list-group list-group-flush">';
            $result .= '<li>';
            $result .= $listing->getAddress2();
            $result .= ', ' . $listing->getTown();
            $result .= '</li>';
            $result .= ' <li>';
            $result .= $listing->getPostcode();
            $result .= '</li>';
            $result .= ' <li>';
            $result .= $listing->getStatus();
            $result .= '</li>';
            $result .= ' <li>';
            $result .= $listing->getBedrooms();
            $result .= ' Bedrooms';
            $result .= '</div>';
            $result .= '<div>';
            $result .= '<button><span>View property</span></button>';
            $result .= '</div>';
            $result .= '</div>';
        }
        return $result;
    }
}
?>