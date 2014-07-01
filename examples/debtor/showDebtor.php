<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Debtor.php');

$WeFact = new phpWeFact\API('API_KEY');
$debtor = new phpWeFact\Debtor();

$debtor->setDebtorCode('DB0003');

$result = $WeFact->showDebtor($debtor);

var_dump($result);
