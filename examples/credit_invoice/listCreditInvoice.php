<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/ListParam.php');

$WeFact = new phpWeFact\API('API_KEY');
$listCreditInvoice = new phpWeFact\ListParam();

$listCreditInvoice->setSearchat('Date')->setSearchfor("2014-07-03");

$result = $WeFact->listCreditInvoice($listCreditInvoice);

var_dump($result);
