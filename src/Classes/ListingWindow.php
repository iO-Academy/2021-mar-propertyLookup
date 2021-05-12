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
            $result .= '<div class= "infoDisplay card-body">';
            $result .= '<h5 class="card-title">';
            $result .= $listing->getAddress2();
            $result .= '</h5>';
            $result .= '<ul class="list-group list-group-flush">';
            $result .= ' <li class="list-group-item">';
            $result .= $listing->getBedrooms();
            $result .= ' Bedrooms';
            $result .= '</li>';
            $result .= ' <li class="list-group-item">';
            $result .= $listing->getStatus();
            $result .= '</li>';
            $result .= '<li class="priceDisplay list-group-item">';
            $result .= number_format($listing->getPrice());
            $result .= '</li>';
            $result .= '</div>';
            $result .= '</div>';
        }
        return $result;
    }
}
?>
<!--<div class="card" style="width: 18rem;">-->
<!--  <img class="card-img-top" src="..." alt="Card image cap">-->
<!--  <div class="card-body">-->
<!--    <h5 class="card-title">Card title</h5>-->
<!--    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--  </div>-->
<!--  <ul class="list-group list-group-flush">-->
<!--    <li class="list-group-item">Cras justo odio</li>-->
<!--    <li class="list-group-item">Dapibus ac facilisis in</li>-->
<!--    <li class="list-group-item">Vestibulum at eros</li>-->
<!--  </ul>-->
<!--  <div class="card-body">-->
<!--    <a href="#" class="card-link">Card link</a>-->
<!--    <a href="#" class="card-link">Another link</a>-->
<!--  </div>-->
<!--</div>'-->