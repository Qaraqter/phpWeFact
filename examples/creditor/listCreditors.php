<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/ListParam.php');

$WeFact = new phpWeFact\API('API_KEY');
$listCreditors = new phpWeFact\ListParam();

$listCreditors->setSearchfor('Qaraqter');

$result = $WeFact->listCreditors($listCreditors);

var_dump($result);
