<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Invoice.php');

$WeFact = new phpWeFact\API('API_KEY');

$invoice = new phpWeFact\Invoice();

$invoice->setInvoiceCode("F0001")->setDate("2014-07-03");

$result = $WeFact->editInvoice($invoice);

var_dump($result);
