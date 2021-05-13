<?php

use ListingsApp\Classes\Listing;

use PHPUnit\Framework\TestCase;

require_once '../../src/Classes/Listing.php';
/**
 * Class ListingTest
 */
class ListingTest extends TestCase
{
    /**
     * test success of agent_ref getter
     */
    public function testGetAgentRef_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getAgentRef();
        $expected= 'CSL123_100259';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of address_1 getter
     */
    public function testGetAddress1_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getAddress1();
        $expected= 'Hill Farm';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of address_2 getter
     */
    public function testGetAddress2_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getAddress2();
        $expected= 'Plough Hill Road';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of town getter
     */
    public function testGetTown_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getTown();
        $expected= 'Nuneaton';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of postcode getter
     */
    public function testGetPostcode_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getPostcode();
        $expected= 'CV11 6PE';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of description getter
     */
    public function testGetDescription_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getDescription();
        $expected= 'This is a rare opportunity...';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of bedrooms getter
     */
    public function testGetBedrooms_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getBedrooms();
        $expected= '6';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of price getter
     */
    public function testGetPrice_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getPrice();
        $expected= '355000';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of image getter
     */
    public function testGetImage_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getImage();
        $expected= 'CSL123_100327_IMG_00.JPG';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of type getter
     */
    public function testGetType_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getType();
        $expected= '1';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of status getter
     */
    public function testGetStatus1_success()
    {
        $listing= new Listing('CSL123_100259', 'Hill Farm',  'Plough Hill Road',  'Nuneaton', 'CV11 6PE', 'This is a rare opportunity...',  '6','355000', 'CSL123_100327_IMG_00.JPG','1','For Sale');
        $result= $listing->getStatus();
        $expected= 'For Sale';
        $this->assertEquals($expected, $result);
    }
}