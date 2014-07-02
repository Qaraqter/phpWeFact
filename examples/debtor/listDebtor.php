<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/ListParam.php');

$WeFact = new phpWeFact\API('API_KEY');
$listDebtor = new phpWeFact\ListParam();

$listDebtor->setSearchfor('Qaraqter');

$result = $WeFact->listDebtor($listDebtor);

var_dump($result);
