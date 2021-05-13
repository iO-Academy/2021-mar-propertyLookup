<?php

use ListingsApp\Classes\Listing;
use ListingsApp\Classes\ListingsWindow;

use PHPUnit\Framework\TestCase;

require_once '../../src/Classes/Listing.php';
require_once '../../src/Classes/ListingsWindow.php';

/**
 * Class ListingWindowTest
 */
class ListingsWindowTest extends TestCase {
    /**
     * create mock of Listing class
     * mock the Listing methods needed for ListingsWindow::displayListings()
     * assert that the actual return value matches the expected return value
     */
    public function testDisplayListings_success()
    {
        $listingMock = $this->createMock(Listing::class);
        $listingMock->expects($this->once())
            ->method('getImage')
            ->willReturn('CSL123_100327_IMG_00.JPG');
        $listingMock->expects($this->once())
            ->method('getAddress2')
            ->willReturn('Plough Hill Road');
        $listingMock->expects($this->once())
            ->method('getTown')
            ->willReturn('Nuneaton');
        $listingMock->expects($this->once())
            ->method('getPostcode')
            ->willReturn('CV11 6PE');
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


        $result= ListingsWindow::displayListings([$listingMock]);
        $expected = '<div class="listingCard card" style="width: 18rem;"><img class="card-img-top" alt="Image of property" src="https://dev.io-academy.uk/resources/property-feed/images/CSL123_100327_IMG_00.JPG"/><div class= "listingInfo"><h5 class="priceDisplay">£355,000</h5><ul class="list-group list-group-flush"><li>Plough Hill Road, Nuneaton</li><li>CV11 6PE</li><li>For Sale</li><li>6 Bedrooms</ul><div class="viewPropertyButton"><a href="listing.php?agentRef=CSL123_100259 "><button type="button" class="btn btn-primary btn-sm"><span>View property</span></button></a></div></div></div>';
        $this->assertEquals($result, $expected);
    }

    /**
     * test the result of passing a string to ListingWindow::displayListing()
     */
    public function testDisplayListings_failure1()
    {
        $this->expectException(Error::class);
        ListingsWindow::displayListings('$listingMock');
    }

    /**
     * test the result of passing an array of string/s to ListingWindow::displayListing()
     */
    public function testDisplayListings_failure2()
    {
        $this->expectException(Error::class);
        ListingsWindows::displayListings(['$listingMock']);
    }
}