<?php
namespace phpWeFact;

class CreditInvoice extends API
{
    /**
     * @var string
     */
    protected $CreditInvoiceCode;

    /**
     * @var string
     */
    protected $InvoiceCode;

    /**
     * @var int
     */
    protected $Creditor;

    /**
     * @var string
     */
    protected $CreditorCode;

    /**
     * @var DateTime
     */
    protected $Date;

    /**
     * @var int
     */
    protected $Term;

    /**
     * @var float
     */
    protected $AmountPaid;

    /**
     * @var date
     */
    protected $PayDate;

    /**
     * @var int
     */
    protected $Status;

    /**
     * @var array
     */
    protected $InvoiceLines;

    /**
     * CreditInvoice constructor
     */
    public function __construct()
    {
        $this->InvoiceLines = array ();
    }

    /**
     * Gets the value of CreditInvoiceCode.
     *
     * @return string
     */
    public function getCreditInvoiceCode()
    {
        return $this->CreditInvoiceCode;
    }
    
    /**
     * Sets the value of CreditInvoiceCode.
     *
     * @param string $CreditInvoiceCode the credit invoice code 
     *
     * @return self
     */
    public function setCreditInvoiceCode($CreditInvoiceCode)
    {
        $this->CreditInvoiceCode = $CreditInvoiceCode;

        return $this;
    }

    /**
     * Gets the value of InvoiceCode.
     *
     * @return string
     */
    public function getInvoiceCode()
    {
        return $this->InvoiceCode;
    }
    
    /**
     * Sets the value of InvoiceCode.
     *
     * @param string $InvoiceCode the invoice code 
     *
     * @return self
     */
    public function setInvoiceCode($InvoiceCode)
    {
        $this->InvoiceCode = $InvoiceCode;

        return $this;
    }

    /**
     * Gets the value of Creditor.
     *
     * @return int
     */
    public function getCreditor()
    {
        return $this->Creditor;
    }
    
    /**
     * Sets the value of Creditor.
     *
     * @param int $Creditor the creditor 
     *
     * @return self
     */
    public function setCreditor($Creditor)
    {
        $this->Creditor = $Creditor;

        return $this;
    }

    /**
     * Gets the value of CreditorCode.
     *
     * @return string
     */
    public function getCreditorCode()
    {
        return $this->CreditorCode;
    }
    
    /**
     * Sets the value of CreditorCode.
     *
     * @param string $CreditorCode the creditor code 
     *
     * @return self
     */
    public function setCreditorCode($CreditorCode)
    {
        $this->CreditorCode = $CreditorCode;

        return $this;
    }

    /**
     * Gets the value of Date.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }
    
    /**
     * Sets the value of Date.
     *
     * @param string $Date the date 
     *
     * @return self
     */
    public function setDate($Date)
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * Gets the value of Term.
     *
     * @return int
     */
    public function getTerm()
    {
        return $this->Term;
    }
    
    /**
     * Sets the value of Term.
     *
     * @param int $Term the term 
     *
     * @return self
     */
    public function setTerm($Term)
    {
        $this->Term = $Term;

        return $this;
    }

    /**
     * Gets the value of AmountPaid.
     *
     * @return float
     */
    public function getAmountPaid()
    {
        return $this->AmountPaid;
    }
    
    /**
     * Sets the value of AmountPaid.
     *
     * @param float $AmountPaid the amount paid 
     *
     * @return self
     */
    public function setAmountPaid($AmountPaid)
    {
        $this->AmountPaid = $AmountPaid;

        return $this;
    }

    /**
     * Gets the value of PayDate.
     *
     * @return string
     */
    public function getPayDate()
    {
        return $this->PayDate;
    }
    
    /**
     * Sets the value of PayDate.
     *
     * @param string $PayDate the pay date 
     *
     * @return self
     */
    public function setPayDate(string $PayDate)
    {
        $this->PayDate = $PayDate;

        return $this;
    }

    /**
     * Gets the value of Status.
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }
    
    /**
     * Sets the value of Status.
     *
     * @param int $Status the status 
     *
     * @return self
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * Gets the value of InvoiceLines.
     *
     * @return array
     */
    public function getInvoiceLines()
    {
        return $this->InvoiceLines;
    }

    /**
     * Sets the value of InvoiceLines.
     *
     * @param array $InvoiceLines the invoice lines 
     *
     * @return self
     */
    public function setInvoiceLines(array $invoiceLines)
    {
        $this->InvoiceLines = $invoiceLines;

        return $this;
    }

    /**
     * Adds an instance of CreditInvoiceLine.
     *
     * @param CreditInvoiceLine $InvoiceLine the credit invoice lines 
     *
     * @return self
     */
    public function addInvoiceLine(CreditInvoiceLine $InvoiceLines)
    {
        $array = get_object_vars($InvoiceLines);
        array_push($this->InvoiceLines, $array);

        return $this;
    }
}
