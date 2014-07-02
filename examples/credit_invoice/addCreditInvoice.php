<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/CreditInvoice.php');
include_once('../../lib/phpWeFact/InvoiceLine.php');

$WeFact = new phpWeFact\API('API_KEY');

$creditInvoice = new phpWeFact\CreditInvoice();

$invoiceLine = new phpWeFact\InvoiceLine();
$invoiceLine2 = new phpWeFact\InvoiceLine();

$invoiceLine->setNumber('1')->setDescription('An awesome product!')->setPriceExcl('50.13')->setTaxPercentage('21');
$invoiceLine2->setNumber('5')->setDescription('Another awesome product!')->setPriceExcl('10.95')->setTaxPercentage('21');

$creditInvoice->setCreditorCode("CD0020")->addInvoiceLine($invoiceLine)->addInvoiceLine($invoiceLine2);

$result = $WeFact->addCreditInvoice($creditInvoice);

var_dump($result);
