<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Invoice.php');
include_once('../../lib/phpWeFact/InvoiceLine.php');
$WeFact = new phpWeFact\API('API_KEY');

$invoice = new phpWeFact\Invoice();
$invoiceLine = new phpWeFact\InvoiceLine();

$invoiceLine->setNumber('1')->setDescription('A way more awesome product!')->setPriceExcl('50.13')->setTaxPercentage('21');

$invoice->setInvoiceCode("F0001")->addInvoiceLine($invoiceLine);

$result = $WeFact->addInvoiceLine($invoice);

var_dump($result);
