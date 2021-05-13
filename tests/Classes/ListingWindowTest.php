<?php
use PHPUnit\Framework\TestCase;
use ListingsApp\Classes\ListingWindow;
require_once '../../src/Classes/ListingWindow.php';

class ListingWindowTest extends TestCase {
    public function testDisplayListing_success()
    {
        $listingMock = $this->createMock(Listing::class);
        $listingMock->expects($this->once())
            ->method('getImage')
            ->willReturn('CSL123_100327_IMG_00.JPG');
        $listingMock->
        $result= ListingWindow::displayListing();
    }
}

