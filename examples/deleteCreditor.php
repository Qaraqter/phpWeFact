<?php
include_once('../lib/phpWeFact/WeFact.php');
include_once('../lib/phpWeFact/Creditor.php');

$WeFact = new phpWeFact\API('API_KEY');
$creditor = new phpWeFact\Creditor();

/* 
For every setter look into phpWeFact\Creditor() 
or https://www.wefact.nl/wefact-standard/apiv2/crediteuren/add
*/
$creditor->setCreditorCode('CD0001');

/*
We give the phpWeFact\Creditor object to deleteCreditor and decide if we want 
to delete all associated Credit Invoices.
 */
$deleted = $WeFact->deleteCreditor($creditor, true);
var_dump($deleted);
