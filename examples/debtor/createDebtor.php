<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Debtor.php');

$WeFact = new phpWeFact\API('API_KEY');
$debtor = new phpWeFact\Debtor();

/* 
For every setter look into phpWeFact\Debtor() 
or https://www.wefact.nl/wefact-standard/apiv2/debiteuren/add
*/
$debtor->setSex('m')->setCompanyName('Qaraqter');

$result = $WeFact->createDebtor($debtor);

var_dump($result);
