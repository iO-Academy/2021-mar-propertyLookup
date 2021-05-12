<?php


namespace ListingsApp\Classes;

require_once 'vendor/autoload.php';

use PDO;

function connectDB():PDO
{
    return new PDO('mysql:host=db;dbname=listings-feed', 'root', 'password');
}

?>
<html>
<body>
<a href="index.php?type=1">Sales</a>
<a href="index.php?type=2">Lettings</a>
<?php

if (isset($_GET['type'])){
    $db = connectDB();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $data = ListingHydrator::getListingsByType($db, $_GET['type']);
    var_dump($data);
    $display = new ListingsWindow();
    $display::displayListings($data);
}
?>


</body>

</html>



