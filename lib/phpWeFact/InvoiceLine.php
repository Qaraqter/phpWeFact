<?php

namespace phpWeFact;

class InvoiceLine extends Invoice
{
    /**
     * Identifier
     *
     * @var int
     */
    protected $Identifier;

    /**
     * The date
     * @var string
     */
    protected $Date;

    /**
     * Quantity
     * @var float
     */
    protected $Number;

    /**
     * The code of the product
     * @var string
     */
    protected $ProductCode;

    /**
     * The description
     * @var string
     */
    protected $Description;

    /**
     * The price excluding Taxes
     * @var float
     */
    protected $PriceExcl;

    /**
     * The discount percentage (1-100)
     * @var float
     */
    protected $DiscountPercentage;

    /**
     * The tax percentage (1-100)
     * @var float
     */
    protected $TaxPercentage;

    /**
     * The periodic type. ('once' or 'period')
     * @var string
     */
    protected $PeriodicType;

    /**
     * The number of periods
     * @var int
     */
    protected $Periods;

    /**
     * Ignore the discount 0 is false, 1 is true;
     */
    protected $ignoreDiscount = 0;

    /**
     * The period
     *
     * This can be d for daily, w for week, m for month, k for quarter,
     * h for half a year, j for a year and t for two years.
     * @var string
     */
    protected $Periodic;

    /**
     * The starting date of the period.
     * @var string
     */
    protected $StartPeriod;

    /**
     * Gets the The date.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }
    
    /**
     * Sets the The date.
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
     * Gets the Quantity.
     *
     * @return float
     */
    public function getNumber()
    {
        return $this->Number;
    }
    
    /**
     * Sets the Quantity.
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
     * Gets the The code of the product.
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }
    
    /**
     * Sets the The code of the product.
     *
     * @param string $ProductCode the product code 
     *
     * @return self
     */
    public function setProductCode($ProductCode)
    {
        $this->ProductCode = $ProductCode;

        return $this;
    }

    /**
     * Gets the The description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Sets the The description.
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
     * Gets the The price excluding Taxes.
     *
     * @return float
     */
    public function getPriceExcl()
    {
        return $this->PriceExcl;
    }
    
    /**
     * Sets the The price excluding Taxes.
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
     * Gets the The discount percentage (1-100).
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->DiscountPercentage;
    }
    
    /**
     * Sets the The discount percentage (1-100).
     *
     * @param float $DiscountPercentage the discount percentage 
     *
     * @return self
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
        $this->DiscountPercentage = $DiscountPercentage;

        return $this;
    }

    /**
     * Gets the The tax percentage (1-100).
     *
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }
    
    /**
     * Sets the The tax percentage (1-100).
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
     * Gets the The periodic type. ('once' or 'period').
     *
     * @return string
     */
    public function getPeriodicType()
    {
        return $this->PeriodicType;
    }
    
    /**
     * Sets the The periodic type. ('once' or 'period').
     *
     * @param string $PeriodicType the periodic type 
     *
     * @return self
     */
    public function setPeriodicType($PeriodicType)
    {
        $this->PeriodicType = $PeriodicType;

        return $this;
    }

    /**
     * Gets the The number of periods.
     *
     * @return int
     */
    public function getPeriods()
    {
        return $this->Periods;
    }
    
    /**
     * Sets the The number of periods.
     *
     * @param int $Periods the periods 
     *
     * @return self
     */
    public function setPeriods($Periods)
    {
        $this->Periods = $Periods;

        return $this;
    }

    /**
     * Gets the The period
     *
     * @return string
     */
    public function getPeriodic()
    {
        return $this->Periodic;
    }
    
    /**
     * Sets the The period
     *
     * @param string $Periodic the periodic 
     *
     * @return self
     */
    public function setPeriodic($Periodic)
    {
        $this->Periodic = $Periodic;

        return $this;
    }

    /**
     * Gets the The starting date of the period.
     *
     * @return string
     */
    public function getStartPeriod()
    {
        return $this->StartPeriod;
    }
    
    /**
     * Sets the The starting date of the period.
     *
     * @param string $StartPeriod the start period 
     *
     * @return self
     */
    public function setStartPeriod($StartPeriod)
    {
        $this->StartPeriod = $StartPeriod;

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

    /**
     * Gets the boolean set to ignore the discount module
     * @return int
     */
    public function getIgnoreDiscount()
    {
        return $this->ignoreDiscount;
    }

    /**
     * Sets the boolean to ignore the discount module
     * @param bool $enable
     */
    public function setIgnoreDiscount(bool $enable)
    {
        $this->ignoreDiscount = (int)$enable;

        return $this;
    }
}
