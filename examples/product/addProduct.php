<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Product.php');
$WeFact = new phpWeFact\API('API_KEY');

$product = new phpWeFact\Product();


$product->setProductName("Super awesome product")
->setProductKeyPhrase("So awesome everyone wants it")
->setPriceExcl(13.37)
->setTaxPercentage(0);

$result = $WeFact->addProduct($product);

var_dump($result);
