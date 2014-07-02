<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/CreditInvoice.php');

$WeFact = new phpWeFact\API('API_KEY');

$creditInvoice = new phpWeFact\CreditInvoice();

$creditInvoice->setCreditInvoiceCode("CF0009")->setDate("2014-07-03");

$result = $WeFact->editCreditInvoice($creditInvoice);

var_dump($result);
