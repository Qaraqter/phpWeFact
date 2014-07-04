<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Product.php');
$WeFact = new phpWeFact\API('API_KEY');

$product = new phpWeFact\Product();

$product->setProductCode('P0007')->setProductKeyPhrase('Let\'s change this up!');

$result = $WeFact->editProduct($product);

var_dump($result);