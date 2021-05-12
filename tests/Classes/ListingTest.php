<?php
use ListingsApp\Classes\Listing;
use PHPUnit\Framework\TestCase;
require_once '../../src/Classes/Listing.php';


class ListingTest extends TestCase{

    public function testGetAgentRef_success()
    {
        $listing= new Listing();
        $result= $listing->getAgentRef();
        $expected= 'CSL123_100259';
        $this->assertEquals($expected, $result);
    }
    public function testGetAddress1_success()
    {
        $listing= new Listing();
        $result= $listing->getAddress1();
        $expected= 'Hill Farm';
        $this->assertEquals($expected, $result);
    }
    public function testGetAddress2_success()
    {
        $listing= new Listing();
        $result= $listing->getAddress2();
        $expected= 'Plough Hill Road';
        $this->assertEquals($expected, $result);
    }
    public function testGetTown_success()
    {
        $listing= new Listing();
        $result= $listing->getTown();
        $expected= 'Nuneaton';
        $this->assertEquals($expected, $result);
    }
    public function testGetPostcode_success()
    {
        $listing= new Listing();
        $result= $listing->getPostcode();
        $expected= 'CV11 6PE';
        $this->assertEquals($expected, $result);
    }
    public function testGetDescription_success()
    {
        $listing= new Listing();
        $result= $listing->getDescription();
        $expected= 'This is a rare opportunity...';
        $this->assertEquals($expected, $result);
    }
    public function testGetBedrooms_success()
    {
        $listing= new Listing();
        $result= $listing->getBedrooms();
        $expected= '6';
        $this->assertEquals($expected, $result);
    }
    public function testGetPrice_success()
    {
        $listing= new Listing();
        $result= $listing->getPrice();
        $expected= '355000';
        $this->assertEquals($expected, $result);
    }
    public function testGetImage_success()
    {
        $listing= new Listing();
        $result= $listing->getImage();
        $expected= 'CSL123_100327_IMG_00.JPG';
        $this->assertEquals($expected, $result);
    }
    public function testGetType_success()
    {
        $listing= new Listing();
        $result= $listing->getType();
        $expected= '1';
        $this->assertEquals($expected, $result);
    }
    public function testGetStatus_success()
    {
        $listing= new Listing();
        $result= $listing->getStatus();
        $expected= 'For Sale';
        $this->assertEquals($expected, $result);
    }
}