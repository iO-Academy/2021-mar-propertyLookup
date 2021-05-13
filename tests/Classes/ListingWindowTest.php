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
        $expected = '<img src ="https://dev.io-academy.uk/resources/property-feed/images/CSL123_100327_IMG_00.JPG" alt="Image of the selected Listing"/><div class= "infoDisplay"><p>Plough Hill Road</p><p>6 Bedrooms</p><p>For Sale</p><p class="priceDisplay">355,000</p><p>CSL123_100259</p></div><div class="descriptionDisplay"><h3>Description</h3><p>This is a rare opportunity...</p></div>';
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


        $result = ListingWindow::displayListings($listingsMockArray);
        $expected = '<div class="listingCard card"><img class="card-img-top" alt="Property for sale at Plough Hill Road" src="https://dev.io-academy.uk/resources/property-feed/images/CSL123_100327_IMG_00.JPG"/><div class= "listingInfo"><h5 class="priceDisplay">355,000</h5><ul class="list-group list-group-flush"><li>Plough Hill Road, </li><li>CV11 6PE</li><li>For Sale</li><li>6 Bedrooms</li></ul><div class="viewPropertyLink"><a href="listing.php?agentRef=CSL123_100259">View property</a></div></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testDisplayListings_failure1()
    {
        $this->expectException(Error::class);
        ListingWindow::displayListings('$listingsMockArray');
    }

    public function testDisplayListings_failure2()
    {
        $this->expectException(Error::class);
        ListingWindow::displayListing(['$listingsMockArray']);
    }

}