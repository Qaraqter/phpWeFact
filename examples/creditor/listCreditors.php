<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/ListParam.php');

$WeFact = new phpWeFact\API('d28cf8b69e03c97f29601c766e6be4cf');
$listCreditors = new phpWeFact\ListParam();

/* 
For every setter look into phpWeFact\ListParam() 
or https://www.wefact.nl/wefact-standard/apiv2/crediteuren/list
*/
$listCreditors->setSearchfor('Qaraqter');

$result = $WeFact->ListCreditors($listCreditors);

var_dump($result);
