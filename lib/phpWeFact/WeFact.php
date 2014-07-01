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
     * @param  phpWeFact\Creditor $creditor
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
     * @param  phpWeFact\Creditor $creditor
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
     * Lists creditors with the parameters defined in $listCreditors
     * @param  ListCreditors $listCreditors
     * @return array
     */
    public function listCreditors(ListCreditors $listCreditors)
    {
        $parameters = get_object_vars($listCreditors);
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
    /**
     * sendRequest sends the request to the WeFact API
     * @param  string $controller
     * @param  string $action
     * @param  array $params
     * @return array
     */
    public function sendRequest($controller, $action, array $params)
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
