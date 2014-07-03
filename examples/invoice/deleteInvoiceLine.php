<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Invoice.php');
include_once('../../lib/phpWeFact/InvoiceLine.php');
$WeFact = new phpWeFact\API('API_KEY');

$invoice = new phpWeFact\Invoice();
$invoiceLine = new phpWeFact\InvoiceLine();

$invoiceLine->setIdentifier('13');

$invoice->setInvoiceCode("F0001")->addInvoiceLine($invoiceLine);

$result = $WeFact->deleteInvoiceLine($invoice);

var_dump($result);
