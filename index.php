<?php


namespace ListingsApp\Classes;

?>
<html>
<body>
<a href="index.php?type=1"><button>Sales</button></a>
<a href="index.php?type=2"><button>Lettings</button></a>

<?php
if (isset($_GET['type'])){
        $db = connectDB();
        $data = ListingHydrator::getListingsByType($db, $_GET['type']);
        echo ListingsWindow::displayListings($data);
}
?>
</body>
</html>



