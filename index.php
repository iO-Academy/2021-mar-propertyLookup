<?php

use ListingsApp\Classes\ListingsWindow;
use ListingsApp\Classes\ListingHydrator;

require_once 'vendor/autoload.php';

/** connect to database
 * @return PDO
 */
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
        $data = ListingHydrator::getListingsByType($db, $_GET['type']);
        echo ListingsWindow::displayListings($data);
}
?>
</body>
</html>



