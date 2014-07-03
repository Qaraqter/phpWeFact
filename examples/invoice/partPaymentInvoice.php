<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Invoice.php');

$WeFact = new phpWeFact\API('API_KEY');

$invoice = new phpWeFact\Invoice();

$invoice->setInvoiceCode("F0001")->setAmountPaid(10.50);

$result = $WeFact->partPaymentInvoice($invoice);

var_dump($result);
