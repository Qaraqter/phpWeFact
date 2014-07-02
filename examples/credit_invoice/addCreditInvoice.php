<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/CreditInvoice.php');
include_once('../../lib/phpWeFact/InvoiceLines.php');

$WeFact = new phpWeFact\API('API_KEY');

$creditInvoice = new phpWeFact\CreditInvoice();

$invoiceLine = new phpWeFact\InvoiceLines();
$invoiceLine2 = new phpWeFact\InvoiceLines();

$invoiceLine->setNumber('1')->setDescription('An awesome product!')->setPriceExcl('50.13')->setTaxPercentage('21');
$invoiceLine2->setNumber('5')->setDescription('Another awesome product!')->setPriceExcl('10.95')->setTaxPercentage('21');

$creditInvoice->setCreditorCode("CD0020")->addInvoiceLines($invoiceLine)->addInvoiceLines($invoiceLine2);

$result = $WeFact->addCreditInvoice($creditInvoice);

var_dump($result);
