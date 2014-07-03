<?php

namespace phpWeFact;

class CreditInvoiceLine extends CreditInvoice
{
    /**
     * Identifier
     *
     * @var int
     */
    protected $Identifier;

    /**
     * Quantity
     * 
     * @var float
     */
    protected $Number;

    /**
     * Invoice description
     * 
     * @var string
     */
    protected $Description;

    /**
     * Price excluding Tax
     * @var float
     */
    protected $PriceExcl;

    /**
     * Tax percentage 0-100
     * 
     * @var float
     */
    protected $TaxPercentage;

    /**
     * InvoiceLines constructor
     */
    public function __construct()
    {
    }

    /**
     * Gets the value of Number.
     *
     * @return float
     */
    public function getNumber()
    {
        return $this->Number;
    }
    
    /**
     * Sets the value of Number.
     *
     * @param float $Number the number 
     *
     * @return self
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;

        return $this;
    }

    /**
     * Gets the value of Description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Sets the value of Description.
     *
     * @param string $Description the description 
     *
     * @return self
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Gets the value of PriceExcl.
     *
     * @return float
     */
    public function getPriceExcl()
    {
        return $this->PriceExcl;
    }
    
    /**
     * Sets the value of PriceExcl.
     *
     * @param float $PriceExcl the price excl 
     *
     * @return self
     */
    public function setPriceExcl($PriceExcl)
    {
        $this->PriceExcl = $PriceExcl;

        return $this;
    }

    /**
     * Gets the value of TaxPercentage.
     *
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }
    
    /**
     * Sets the value of TaxPercentage.
     *
     * @param float $TaxPercentage the tax percentage 
     *
     * @return self
     */
    public function setTaxPercentage($TaxPercentage)
    {
        $this->TaxPercentage = $TaxPercentage;

        return $this;
    }

    /**
     * Gets the Identifier.
     *
     * @return int
     */
    public function getIdentifier()
    {
        return $this->Identifier;
    }
    
    /**
     * Sets the Identifier.
     *
     * @param int $Identifier the identifier 
     *
     * @return self
     */
    public function setIdentifier($Identifier)
    {
        $this->Identifier = $Identifier;

        return $this;
    }
}
