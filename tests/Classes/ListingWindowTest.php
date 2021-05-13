<?php

use ListingsApp\Classes\Listing;
use ListingsApp\Classes\ListingWindow;

use PHPUnit\Framework\TestCase;

require_once '../../src/Classes/Listing.php';
require_once '../../src/Classes/ListingWindow.php';

/**
 * Class ListingWindowTest
 */
class ListingWindowTest extends TestCase {
    /**
     * create mock of Listing class
     * mock the Listing methods needed for ListingWindow::displayListing()
     * assert that the actual return value matches the expected return value
     */
    public function testDisplayListing_success()
    {
        $listingMock = $this->createMock(Listing::class);
        $listingMock->expects($this->once())
            ->method('getImage')
            ->willReturn('CSL123_100327_IMG_00.JPG');
        $listingMock->expects($this->once())
            ->method('getAddress2')
            ->willReturn('Plough Hill Road');
        $listingMock->expects($this->once())
            ->method('getBedrooms')
            ->willReturn('6');
        $listingMock->expects($this->once())
            ->method('getStatus')
            ->willReturn('For Sale');
        $listingMock->expects($this->once())
            ->method('getPrice')
            ->willReturn('355000');
        $listingMock->expects($this->once())
            ->method('getAgentRef')
            ->willReturn('CSL123_100259');
        $listingMock->expects($this->once())
            ->method('getDescription')
            ->willReturn('This is a rare opportunity...');

        $result= ListingWindow::displayListing($listingMock);
        $expected = '<img src ="https://dev.io-academy.uk/resources/property-feed/images/CSL123_100327_IMG_00.JPG"/><div class= "infoDisplay"><p>Plough Hill Road</p><p>6 Bedrooms</p><p>For Sale</p><p class="priceDisplay">355,000</p><p>CSL123_100259</div><div class="descriptionDisplay"><h3> Description </h3><p>This is a rare opportunity...</p></div>';
        $this->assertEquals($result, $expected);
    }

    /**
     * test the result of passing a string to ListingWindow::displayListing()
     */
    public function testDisplayListing_failure1()
    {
        $this->expectException(Error::class);
        ListingWindow::displayListing('$listingMock');
    }

    /**
     * test the result of passing an array of string/s to ListingWindow::displayListing()
     */
    public function testDisplayListing_failure2()
    {
        $this->expectException(Error::class);
        ListingWindow::displayListing(['$listingMock']);
    }

    public function testDisplayListings_success()
    {
        //$listingsMock = [];
        $listingsMock = $this->createMock(Listing::class);
        $listingsMock->expects($this->once())
            ->method('getImage')
            ->willReturn('CSL123_100327_IMG_00.JPG');
        $listingsMock->expects($this->any())
            ->method('getAddress2')
            ->willReturn('Plough Hill Road');
        $listingsMock->expects($this->once())
            ->method('getPostcode')
            ->willReturn('CV11 6PE');
        $listingsMock->expects($this->once())
            ->method('getBedrooms')
            ->willReturn('6');
        $listingsMock->expects($this->once())
            ->method('getStatus')
            ->willReturn('For Sale');
        $listingsMock->expects($this->once())
            ->method('getPrice')
            ->willReturn('355000');
        $listingsMock->expects($this->once())
            ->method('getAgentRef')
            ->willReturn('CSL123_100259');

        $listingsMockArray = [];
        $listingsMockArray[] = $listingsMock;


        $result= ListingWindow::displayListings($listingsMockArray);
        $expected = '<div class="listingCard card" style="width: 18rem;"><img class="card-img-top" alt="Property for sale at Plough Hill Road" src="https://dev.io-academy.uk/resources/property-feed/images/CSL123_100327_IMG_00.JPG"/><div class= "listingInfo"><h5 class="priceDisplay">355,000</h5><ul class="list-group list-group-flush"><li>Plough Hill Road, </li><li>CV11 6PE</li><li>For Sale</li><li>6 Bedrooms</li></ul><div class="viewPropertyLink"><a href="listing.php?agentRef=CSL123_100259">View property</a></div></div></div>';
        $this->assertEquals($result, $expected);
//        $practice_array = [[
//           'getImage' => 'CSL123_100327_IMG_00.JPG',
//            'getAddress2' => 'Plough Hill Road',
//            'getPostcode' => 'CV11 6PE',
//            'getBedrooms' => '6',
//            'getStatus' => 'For Sale',
//            'getPrice' => '355000',
//            'getAgentRef' => 'CSL123_100259',
//            'getDescription' => 'This is a rare opportunity...'
//        ]];
//        $result = ListingWindow::displayListings($practice_array);
//        $expected = '';
//        $expected .= "<div class='listingCard card' style='width: 18rem;'>";
//        $expected .= "<img class='card-img-top'  src="https://dev.io-academy.uk/resources/property-feed/images/' . $listing->getImage() . '"/>';
//        $expected .= '<div class= "listingInfo">';
//        $expected .= '<h5 class="priceDisplay">' . '355000' . '</h5>';
//        $expected .= '<ul class="list-group list-group-flush">';
//        $expected .= '<li>' . 'Plough Hill Road' . ', ' . $listing->getTown() . '</li>';
//        $expected .= '<li>' . 'CV11 6PE' . '</li>';
//        $expected .= '<li>' . 'For Sale' . '</li>';
//        $expected .= '<li>' . '6' . ' Bedrooms';
//        $expected .= '</ul>';
//        $expected .= '<div class="viewPropertyButton">';
//        $expected .= '<a href="listing.php?agentRef=' . 'CSL123_100259' .' "><button type="button" class="btn btn-primary btn-sm"><span>View property</span></button></a>';
//        $expected .= '</div>';
//        $expected .= '</div>';
//        $expected .= '</div>';
//
//        $this->assertEquals($result, $expected);
    }

}