<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Invoice.php');
include_once('../../lib/phpWeFact/InvoiceLine.php');

$WeFact = new phpWeFact\API('API_KEY');

$invoice = new phpWeFact\Invoice();

$invoiceLine = new phpWeFact\InvoiceLine();
$invoiceLine2 = new phpWeFact\InvoiceLine();

$invoiceLine->setNumber('3')->setDescription('An awesome product!')->setProductCode('P0001');
$invoiceLine2->setNumber('5')->setDescription('Another awesome product!')->setPriceExcl(10.95)->setPeriodicType('period')->setPeriods(3)->setPeriodic('d');

$invoice->setDebtorCode('DB0003')->addInvoiceLine($invoiceLine)->addInvoiceLine($invoiceLine2);

$result = $WeFact->addInvoice($invoice);

var_dump($result);
