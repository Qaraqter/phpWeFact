<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/ListParam.php');

$WeFact = new phpWeFact\API('API_KEY');
$listInvoice = new phpWeFact\ListParam();

$listInvoice->setSearchat('Date')->setSearchfor("2014-07-03");

$result = $WeFact->listCreditInvoice($listInvoice);

var_dump($result);
