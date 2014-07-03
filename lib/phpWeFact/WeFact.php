<?php

namespace phpWeFact;

class API
{
    private $url;
    private $apiKey;

    /**
     * The constructor
     * @param string $securityKey
     */
    public function __construct($securityKey)
    {
        $this->url = 'https://www.mijnwefact.nl/apiv2/api.php';
        $this->api_key = $securityKey;
    }

    /**
     * Creates a Creditor
     * @param  Creditor $creditor
     * @return array
     */
    public function createCreditor(Creditor $creditor)
    {
        //return get_object_vars($creditor);
        $parameters = get_object_vars($creditor);
        if ($parameters['Sex'] == '') {
            throw new \InvalidArgumentException(
                sprintf('Sex must be defined!')
            );
        }
        if ($parameters['Sex'] != "m" && $parameters['Sex'] != "f") {
            throw new \InvalidArgumentException(
                sprintf('Sex should either be \'m\' or \'f\' not '. $parameters['Sex'] .'!')
            );
        }
        if ($parameters['CompanyName'] == '' && $parameters['SurName'] == '') {
            throw new \InvalidArgumentException(
                sprintf('Either companyName or surName must be defined!')
            );
        }
         return $this->sendRequest('creditor', 'add', $parameters);
    }

    /**
     * Delete a creditor
     * @param  Creditor $creditor
     * @param  bool $removered [description]
     * @return array
     */
    public function deleteCreditor(Creditor $creditor, $removeCreditInvoice = false)
    {
        if ($creditor->getCreditorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditorCode must be defined!')
            );
        }

        $withCreditInvoice = "no";

        if ($removeCreditInvoice) {
            $withCreditInvoice = "yes";
        }

        $parameters = array(
            'CreditorCode'      => $creditor->getCreditorCode(),
            'withcreditinvoice' => $withCreditInvoice,
        );
        return $this->sendRequest('creditor', 'delete', $parameters);
    }

    /**
     * Edit a creditor
     * @param  Creditor $creditor
     * @return array
     */
    public function editCreditor(Creditor $creditor)
    {
        if ($creditor->getCreditorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditorCode must be defined!')
            );
        }

        $parameters = get_object_vars($creditor);
        return $this->sendRequest('creditor', 'edit', $parameters);
    }

    /**
     * Lists creditors with the parameters defined in $listParam
     * @param  listParam $listParam
     * @return array
     */
    public function listCreditors(ListParam $listParam)
    {
        $parameters = get_object_vars($listParam);
        $response = $this->sendRequest('creditor', 'list', $parameters);
        return $response;
    }

    /**
     * Shows the creditor info
     * @param  Creditor $creditor
     * @return array
     */
    public function showCreditor(Creditor $creditor)
    {
        if ($creditor->getCreditorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditorCode must be defined!')
            );
        }
        $parameters = get_object_vars($creditor);

        $response = $this->sendRequest('creditor', 'show', $parameters);

        return $response;
    }

    /**
     * getCreditor get's the creditor info and parses it to an Creditor object
     * @param  Creditor $creditor
     * @return Creditor $creditorObject
     */
    public function getCreditor(Creditor $creditor)
    {
        if ($creditor->getCreditorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditorCode must be defined!')
            );
        }
        $parameters = get_object_vars($creditor);
        $response = $this->sendRequest('creditor', 'show', $parameters);
        if ($response['status'] != 'error') {
            $creditorObject = new Creditor();
            $creditorObject->setCreditorCode($response['creditor']['CreditorCode'])
            ->setCompanyName($response['creditor']['CompanyName'])
            ->setCompanyNumber($response['creditor']['CompanyNumber'])
            ->setTaxNumber($response['creditor']['TaxNumber'])
            ->setSex($response['creditor']['Sex'])
            ->setInitials($response['creditor']['Initials'])
            ->setSurName($response['creditor']['SurName'])
            ->setAddress($response['creditor']['Address'])
            ->setZipCode($response['creditor']['ZipCode'])
            ->setCity($response['creditor']['City'])
            ->setCountry($response['creditor']['Country'])
            ->setEmailAddress($response['creditor']['EmailAddress'])
            ->setPhoneNumber($response['creditor']['PhoneNumber'])
            ->setMobileNumber($response['creditor']['MobileNumber'])
            ->setFaxNumber($response['creditor']['FaxNumber'])
            ->setComment($response['creditor']['Comment'])
            ->setAccountNumber($response['creditor']['AccountNumber'])
            ->setAccountName($response['creditor']['AccountName'])
            ->setAccountBank($response['creditor']['AccountBank'])
            ->setAccountCity($response['creditor']['AccountCity'])
            ->setAccountBIC($response['creditor']['AccountBIC'])
            ->setGroups($response['creditor']['Groups']);
            return $creditorObject;
        }
         return $response;
    }

    /**
     * Creates a Debtor
     * @param  Debtor $debtor
     * @return array
     */
    public function createDebtor(Debtor $debtor)
    {
        $parameters = get_object_vars($debtor);
        if ($parameters['Sex'] == '') {
            throw new \InvalidArgumentException(
                sprintf('Sex must be defined!')
            );
        }
        if ($parameters['Sex'] != "m" && $parameters['Sex'] != "f") {
            throw new \InvalidArgumentException(
                sprintf('Sex should either be \'m\' or \'f\' not '. $parameters['Sex'] .'!')
            );
        }
        if ($parameters['CompanyName'] == '' && $parameters['SurName'] == '') {
            throw new \InvalidArgumentException(
                sprintf('Either companyName or surName must be defined!')
            );
        }

        return $this->sendRequest('debtor', 'add', $parameters);
    }

    /**
     * Edit a debitor
     * @param  debtor $debtor
     * @return array
     */
    public function editDebtor(Debtor $debtor)
    {
        if ($debtor->getDebtorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('DebtorCode must be defined!')
            );
        }

        $parameters = get_object_vars($debtor);
        return $this->sendRequest('debtor', 'edit', $parameters);
    }

    /**
     * Lists debtors with the parameters defined in $listParam
     * @param  ListParam $listParam
     * @return array
     */
    public function listDebtor(ListParam $listParam)
    {
        $parameters = get_object_vars($listParam);
        $response = $this->sendRequest('debtor', 'list', $parameters);
        return $response;
    }

    /**
     * Shows the debtor's info
     * @param  Debtor $debtor
     * @return array
     */
    public function showDebtor(Debtor $debtor)
    {
        if ($debtor->getDebtorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('DebtorCode must be defined!')
            );
        }
        $parameters = get_object_vars($debtor);

        $response = $this->sendRequest('debtor', 'show', $parameters);

        return $response;
    }

    /**
     * getDebtor get's the debtor's info and parses it to an Debtor object
     * @param  Debtor $debtor
     * @return Debtor $debtorObject
     */
    public function getDebtor(Debtor $debtor)
    {
        if ($debtor->getDebtorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('DebtorCode must be defined!')
            );
        }
        $parameters = get_object_vars($debtor);
        $response = $this->sendRequest('debtor', 'show', $parameters);
        if ($response['status'] != 'error') {
            $debtorObject = new Debtor();
            $debtorObject->setDebtorCode($response['debtor']['DebtorCode'])
            ->setCompanyName($response['debtor']['CompanyName'])
            ->setCompanyNumber($response['debtor']['CompanyNumber'])
            ->setLegalForm($response['debtor']['LegalForm'])
            ->setTaxNumber($response['debtor']['TaxNumber'])
            ->setSex($response['debtor']['Sex'])
            ->setInitials($response['debtor']['Initials'])
            ->setSurName($response['debtor']['SurName'])
            ->setAddress($response['debtor']['Address'])
            ->setZipCode($response['debtor']['ZipCode'])
            ->setCity($response['debtor']['City'])
            ->setCountry($response['debtor']['Country'])
            ->setEmailAddress($response['debtor']['EmailAddress'])
            ->setSecondEmailAddress($response['debtor']['SecondEmailAddress'])
            ->setPhoneNumber($response['debtor']['PhoneNumber'])
            ->setMobileNumber($response['debtor']['MobileNumber'])
            ->setFaxNumber($response['debtor']['FaxNumber'])
            ->setComment($response['debtor']['Comment'])
            ->setInvoiceMethod($response['debtor']['InvoiceMethod'])
            ->setInvoiceCompanyName($response['debtor']['InvoiceCompanyName'])
            ->setInvoiceInitials($response['debtor']['InvoiceInitials'])
            ->setInvoiceSurName($response['debtor']['InvoiceSurName'])
            ->setInvoiceAddress($response['debtor']['InvoiceAddress'])
            ->setInvoiceZipCode($response['debtor']['InvoiceZipCode'])
            ->setInvoiceCity($response['debtor']['InvoiceCity'])
            ->setInvoiceCountry($response['debtor']['InvoiceCountry'])
            ->setInvoiceEmailAddress($response['debtor']['InvoiceEmailAddress'])
            ->setInvoiceAuthorisation($response['debtor']['InvoiceAuthorisation'])
            ->setInvoiceDataForPriceQuote($response['debtor']['InvoiceDataForPriceQuote'])
            ->setAccountNumber($response['debtor']['AccountNumber'])
            ->setAccountName($response['debtor']['AccountName'])
            ->setAccountBank($response['debtor']['AccountBank'])
            ->setAccountCity($response['debtor']['AccountCity'])
            ->setAccountBIC($response['debtor']['AccountBIC'])
            ->setTaxable($response['debtor']['Taxable'])
            ->setInvoiceTerm($response['debtor']['InvoiceTerm'])
            ->setPaymentMail($response['debtor']['PaymentMail'])
            ->setGroups($response['debtor']['Groups'])
            ->setCustomFields($response['debtor']['CustomFields']);

            return $debtorObject;
        }
        return $response;
    }

    /**
     * Adds a credit invoice
     * @param CreditInvoice $creditInvoice
     */
    public function addCreditInvoice(CreditInvoice $creditInvoice)
    {
        if ($creditInvoice->getCreditorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditorCode must be defined!')
            );
        }

        $InvoiceLines = $creditInvoice->getInvoiceLines();
        if (empty($InvoiceLines)) {
            throw new \InvalidArgumentException(
                sprintf('There must be at least one InvoiceLines object in the InvoiceLines array!')
            );
        }

        $parameters = get_object_vars($creditInvoice);
        return $this->sendRequest('creditinvoice', 'add', $parameters);
    }

    /**
     * Deletes a credit invoice
     * @param  CreditInvoice $creditInvoice
     * @return array
     */
    public function deleteCreditInvoice(CreditInvoice $creditInvoice)
    {
        if ($creditInvoice->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($creditInvoice);
        return $this->sendRequest('creditinvoice', 'delete', $parameters);
    }

    /**
     * Edits a credit invoice
     * @param  CreditInvoice $creditInvoice
     * @return array
     */
    public function editCreditInvoice(CreditInvoice $creditInvoice)
    {
        if ($creditInvoice->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($creditInvoice);
        return $this->sendRequest('creditinvoice', 'edit', $parameters);
    }


    /**
     * Lists credit invoices with the parameters defined in $listParam
     * @param  ListParam $listParam
     * @return array
     */
    public function listCreditInvoice(ListParam $listParam)
    {
        $parameters = get_object_vars($listParam);
        $response = $this->sendRequest('creditinvoice', 'list', $parameters);
        return $response;
    }

    /**
     * Marks a credit invoice as paid
     * @param  CreditInvoice $creditInvoice
     * @return array
     */
    public function markCreditInvoiceAsPaid(CreditInvoice $creditInvoice)
    {
        if ($creditInvoice->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($creditInvoice);
        return $this->sendRequest('creditinvoice', 'markaspaid', $parameters);
    }

    /**
     * Add a partly payment to the credit invoice
     * @param  CreditInvoice $creditInvoice [description]
     * @return array
     */
    public function partPaymentCreditInvoice(CreditInvoice $creditInvoice)
    {
        if ($creditInvoice->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        if ($creditInvoice->getAmountPaid() == '') {
            throw new \InvalidArgumentException(
                sprintf('AmountPaid must be defined!')
            );
        }

        $parameters = get_object_vars($creditInvoice);
        return $this->sendRequest('creditinvoice', 'partpayment', $parameters);
    }

    /**
     * Returns the info of an Credit Invoice
     * @param  CreditInvoice $creditInvoice
     * @return array
     */
    public function showCreditInvoice(CreditInvoice $creditInvoice)
    {
        if ($creditInvoice->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($creditInvoice);
        return $this->sendRequest('creditinvoice', 'show', $parameters);
    }

    /**
     * Adds a invoice line to an EXISTING credit invoice
     * @param CreditInvoice $creditInvoice
     * @return  array
     */
    public function addCreditInvoiceLine(CreditInvoice $creditInvoice)
    {
        if ($creditInvoice->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        $InvoiceLines = $creditInvoice->getInvoiceLines();
        if (empty($InvoiceLines)) {
            throw new \InvalidArgumentException(
                sprintf('There must be at least one InvoiceLine object in the InvoiceLines array!')
            );
        }

        $parameters = get_object_vars($creditInvoice);
        return $this->sendRequest('creditinvoiceline', 'add', $parameters);
    }

    /**
     * Deletes an invoice line from an EXISTING credit invoice
     * @param  CreditInvoice $creditInvoice
     * @return array
     */
    public function deleteCreditInvoiceLine(CreditInvoice $creditInvoice)
    {
        if ($creditInvoice->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        $InvoiceLines = $creditInvoice->getInvoiceLines();
        if (empty($InvoiceLines)) {
            throw new \InvalidArgumentException(
                sprintf('There must be at least one InvoiceLine object in the InvoiceLines array!')
            );
        }

        $parameters = get_object_vars($creditInvoice);
        return $this->sendRequest('creditinvoiceline', 'delete', $parameters);
    }

    /**
     * Adds an invoice
     * @param Invoice $invoice
     * @return array
     */
    public function addInvoice(Invoice $invoice)
    {
        if ($invoice->getDebtorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('DebtorCode must be defined!')
            );
        }

        $InvoiceLines = $invoice->getInvoiceLines();
        if (empty($InvoiceLines)) {
            throw new \InvalidArgumentException(
                sprintf('There must be at least one InvoiceLine object in the InvoiceLines array!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'add', $parameters);
    }

    /**
     * Credits an invoice
     * @param  Invoice $invoice
     * @return array
     */
    public function creditInvoice(Invoice $invoice)
    {
        if ($invoice->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'credit', $parameters);
    }

    /**
     * Deletes an invoice
     * @param  Invoice $invoice
     * @return array
     */
    public function deleteInvoice(Invoice $invoice)
    {
        if ($invoice->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'delete', $parameters);
    }

    /**
     * Downloads an invoice in a base64 encoded string
     * @param  Invoice $invoice
     * @return array
     */
    public function downloadInvoice(Invoice $invoice)
    {
        if ($invoice->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'download', $parameters);
    }

    /**
     * Edits an invoice
     * @param  Invoice $invoice
     * @return array
     */
    public function editInvoice(Invoice $invoice)
    {
        if ($invoice->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'edit', $parameters);
    }

    /**
     * Lists invoices with the parameters defined in $listParam
     * @param  ListParam $listParam
     * @return array
     */
    public function listInvoice(ListParam $listParam)
    {
        $parameters = get_object_vars($listParam);
        $response = $this->sendRequest('invoice', 'list', $parameters);
        return $response;
    }

    /**
     * Marks the invoice as paid
     * @param  Invoice $invoice
     * @return array
     */
    public function markInvoiceAsPaid(Invoice $invoice)
    {
        if ($invoice->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'markaspaid', $parameters);
    }

    /**
     * Marks the invoice as unpaid
     * @param  Invoice $invoice
     * @return array
     */
    public function markInvoiceAsUnpaid(Invoice $invoice)
    {
        if ($invoice->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'markasunpaid', $parameters);
    }

    /**
     * Add a partly payment to the invoice
     * @param  Invoice $invoice
     * @return array
     */
    public function partPaymentInvoice(Invoice $invoice)
    {
        if ($invoice->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        if ($invoice->getAmountPaid() == '') {
            throw new \InvalidArgumentException(
                sprintf('AmountPaid must be defined!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'partpayment', $parameters);
    }

    /**
     * Send an invoice by email
     * @param  Invoice $invoice
     * @return array
     */
    public function sendInvoiceByEmail(Invoice $invoice)
    {
        if ($invoice->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'sendbyemail', $parameters);
    }

    /**
     * Send an invoice reminder by email
     * @param  Invoice $invoice
     * @return array
     */
    public function sendInvoiceReminderByEmail(Invoice $invoice)
    {
        if ($invoice->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'sendreminderbyemail', $parameters);
    }

    /**
     * Send an invoice summation by email
     * @param  Invoice $invoice
     * @return array
     */
    public function sendInvoiceSummationByEmail(Invoice $invoice)
    {
        if ($invoice->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($invoice);
        return $this->sendRequest('invoice', 'sendsummationbyemail', $parameters);
    }

    /**
     * sendRequest sends the request to the WeFact API
     * @param  string $controller
     * @param  string $action
     * @param  array $params
     * @return array
     */
    private function sendRequest($controller, $action, array $params)
    {
        
        if (is_array($params)) {
            $params['api_key'] = $this->api_key;
            $params['controller'] = $controller;
            $params['action'] = $action;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, '10');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        $curlResp = curl_exec($ch);
        $curlError = curl_error($ch);

        if ($curlError != '') {
            $result = array(
                'controller' => 'invalid',
                'action' => 'invalid',
                'status' => 'error',
                'date' => date('c'),
                'errors' => array($curlError)
            );
        } else {
            $result = json_decode($curlResp, true);
        }

        return $result;
    }
}
