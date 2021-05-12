<?php
use ListingsApp\Classes\Example;
require_once 'vendor/autoload.php';



?>
<html>
<body>
<a href="index.php?type=1">Sales</a>
<a href="index.php?type=2">Lettings</a>
<?php
$type = $_GET["type"];
if (isset($type)){
    if ($type === 'sales') {
        return displayListings();
    }
    if ($type === 'lettings') {
        return displayListings();
    }
}
?>


</body>

</html>



