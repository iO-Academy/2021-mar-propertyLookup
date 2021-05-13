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
        $listing= new Listing();
        $result= $listing->getAgentRef();
        $expected= 'CSL123_100259';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of address_1 getter
     */
    public function testGetAddress1_success()
    {
        $listing= new Listing();
        $result= $listing->getAddress1();
        $expected= 'Hill Farm';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of address_2 getter
     */
    public function testGetAddress2_success()
    {
        $listing= new Listing();
        $result= $listing->getAddress2();
        $expected= 'Plough Hill Road';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of town getter
     */
    public function testGetTown_success()
    {
        $listing= new Listing();
        $result= $listing->getTown();
        $expected= 'Nuneaton';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of postcode getter
     */
    public function testGetPostcode_success()
    {
        $listing= new Listing();
        $result= $listing->getPostcode();
        $expected= 'CV11 6PE';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of description getter
     */
    public function testGetDescription_success()
    {
        $listing= new Listing();
        $result= $listing->getDescription();
        $expected= 'This is a rare opportunity...';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of bedrooms getter
     */
    public function testGetBedrooms_success()
    {
        $listing= new Listing();
        $result= $listing->getBedrooms();
        $expected= '6';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of price getter
     */
    public function testGetPrice_success()
    {
        $listing= new Listing();
        $result= $listing->getPrice();
        $expected= '355000';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of image getter
     */
    public function testGetImage_success()
    {
        $listing= new Listing();
        $result= $listing->getImage();
        $expected= 'CSL123_100327_IMG_00.JPG';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of type getter
     */
    public function testGetType_success()
    {
        $listing= new Listing();
        $result= $listing->getType();
        $expected= '1';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of status getter if status is 1
     */
    public function testGetStatus1_success()
    {
        $listing= new Listing();
        $listing->setStatus('1');
        $result= $listing->getStatus();
        $expected= 'For Sale';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of status getter if status is 2
     */
    public function testGetStatus2_success()
    {
        $listing= new Listing();
        $listing->setStatus('2');
        $result= $listing->getStatus();
        $expected= 'Sold';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of status getter if status is 3
     */
    public function testGetStatus3_success()
    {
        $listing= new Listing();
        $listing->setStatus('3');
        $result= $listing->getStatus();
        $expected= 'To Let';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of status getter if status is 4
     */
    public function testGetStatus4_success()
    {
        $listing= new Listing();
        $listing->setStatus('4');
        $result= $listing->getStatus();
        $expected= 'Let Agreed';
        $this->assertEquals($expected, $result);
    }

    /**
     * test success of status setter
     */
    public function testSetStatus_success()
    {
        $listing = new Listing();
        $expected = 'Let Agreed';
        $listing->setStatus('4');
        $result = $listing->getStatus();
        $this->assertEquals($result, $expected);
    }
}