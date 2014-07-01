<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/ListCreditors.php');

$WeFact = new phpWeFact\API('API_KEY');
$listCreditors = new phpWeFact\ListCreditors();

/* 
For every setter look into phpWeFact\listCreditors() 
or https://www.wefact.nl/wefact-standard/apiv2/crediteuren/list
*/
$listCreditors->setSearchfor('Qaraqter');

$result = $WeFact->ListCreditors($listCreditors);

var_dump($result);
