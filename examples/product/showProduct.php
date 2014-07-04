<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Product.php');
$WeFact = new phpWeFact\API('API_KEY');

$product = new phpWeFact\Product();

$product->setProductCode('P0007');

$result = $WeFact->showProduct($product);

var_dump($result);