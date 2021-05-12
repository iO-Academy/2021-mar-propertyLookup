<?php


namespace ListingsApp\Classes;
use PDO;

//<a href="index.php?type=sales">Sales</a>
//<a href="index.php?type=lettings">Lettings</a>

class ListingsWindow
{

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function displayListings()
{

}

}

//$type = $_GET["type"];
//if (isset($type)){
//    if ($type === 'sales') {
//        //return displayListing(sales)
//    }
//    if ($type === 'lettings') {
//        //return ListingHydrator::getForLetListings($db);
//    }
//}