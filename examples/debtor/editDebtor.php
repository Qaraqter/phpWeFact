<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Debtor.php');

$WeFact = new phpWeFact\API('API_KEY');
$debtor = new phpWeFact\Debtor();

/* 
For every setter look into phpWeFact\Creditor() 
or https://www.wefact.nl/wefact-standard/apiv2/crediteuren/add
*/
$debtor->setDebtorCode('DB0001')->setSex('f')->setCompanyName('Changed');

$result = $WeFact->editDebtor($debtor);

var_dump($result);
