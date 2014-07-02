<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/CreditInvoice.php');
include_once('../../lib/phpWeFact/InvoiceLine.php');
$WeFact = new phpWeFact\API('API_KEY');

$creditInvoice = new phpWeFact\CreditInvoice();
$invoiceLine = new phpWeFact\InvoiceLine();

$invoiceLine->setIdentifier('15');

$creditInvoice->setCreditInvoiceCode("CF0009")->addInvoiceLine($invoiceLine);

$result = $WeFact->deleteCreditInvoiceLine($creditInvoice);

var_dump($result);
