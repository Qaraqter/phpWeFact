<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/CreditInvoice.php');
include_once('../../lib/phpWeFact/CreditInvoiceLine.php');
$WeFact = new phpWeFact\API('API_KEY');

$creditInvoice = new phpWeFact\CreditInvoice();
$invoiceLine = new phpWeFact\CreditInvoiceLine();

$invoiceLine->setNumber('1')->setDescription('A way more awesome product!')->setPriceExcl('50.13')->setTaxPercentage('21');

$creditInvoice->setCreditInvoiceCode("CF0009")->addInvoiceLine($invoiceLine);

$result = $WeFact->addCreditInvoiceLine($creditInvoice);

var_dump($result);
