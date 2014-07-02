<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/CreditInvoice.php');

$WeFact = new phpWeFact\API('API_KEY');

$creditInvoice = new phpWeFact\CreditInvoice();

$creditInvoice->setCreditInvoiceCode("CF0001");

$result = $WeFact->deleteCreditInvoice($creditInvoice);

var_dump($result);
