<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/ListParam.php');
$WeFact = new phpWeFact\API('API_KEY');

$list = new phpWeFact\ListParam();

$list->setSearchfor('invoice');

$result = $WeFact->listProduct($list);

var_dump($result);