<?php
include_once('../lib/phpWeFact/WeFact.php');
include_once('../lib/phpWeFact/Creditor.php');

$WeFact = new phpWeFact\API('API_KEY');
$creditor = new phpWeFact\Creditor();

/* 
For every setter look into phpWeFact\Creditor() 
or https://www.wefact.nl/wefact-standard/apiv2/crediteuren/add
*/
$creditor->setSex('m')->setCompanyName('Qaraqter');

$result = $WeFact->createCreditor($creditor);
var_dump($result);
