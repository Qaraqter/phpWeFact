<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/ListParam.php');

$WeFact = new phpWeFact\API('API_KEY');
$listDebtor = new phpWeFact\ListParam();

/* 
For every setter look into phpWeFact\listDebtor() 
or https://www.wefact.nl/wefact-standard/apiv2/debiteuren/list
*/
$listDebtor->setSearchfor('Qaraqter');

$result = $WeFact->ListDebtor($listDebtor);

var_dump($result);
