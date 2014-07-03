<?php

namespace phpWeFact;

class Product extends API
{
    /**
     * The product code
     * @var string
     */
    protected $ProductCode;// string  Het productnummer Geef deze parameter niet mee wanneer het productnummer automatisch bepaald mag worden.
    
    /**
     * The product name
     * @var string
     */
    protected $ProductName;// string  Productnaam

    /**
     * Product description on an invoice
     * @var string
     */
    protected $ProductKeyPhrase;//    string  Omschrijving op factuur

    /**
     * Extended product description for internal use.
     * @var string
     */
    protected $ProductDescription;//  string  Uitgebreide (interne) omschrijving

    /**
     * Price excluding taxes
     * @var float
     */
    protected $PriceExcl;//   float   Prijs per stuk (excl. BTW)

    /**
     * The price period.
     * This can be d for daily, w for week, m for month, k for quarter,
     * h for half a year, j for a year and t for two years.
     * @var string
     */
    protected $PricePeriod;// string  Zie variabelen-lijst. Standaard: '' (= eenmalig)

    /**
     * The tax percentage
     * Can be 0-100
     * @var float
     */
    protected $TaxPercentage;//   float   BTW percentage: 0 - 100

    /**
     * An array with ID's of product groups
     * @var array
     */
    protected $Groups;

    /**
     * The constructor
     */
    public function __construct()
    {
        $this->Groups = array();
    }

    /**
     * Gets the The product code.
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }
    
    /**
     * Sets the The product code.
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
     * Gets the The product name.
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->ProductName;
    }
    
    /**
     * Sets the The product name.
     *
     * @param string $ProductName the product name 
     *
     * @return self
     */
    public function setProductName($ProductName)
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    /**
     * Gets the Product description on an invoice.
     *
     * @return string
     */
    public function getProductKeyPhrase()
    {
        return $this->ProductKeyPhrase;
    }
    
    /**
     * Sets the Product description on an invoice.
     *
     * @param string $ProductKeyPhrase the product key phrase 
     *
     * @return self
     */
    public function setProductKeyPhrase($ProductKeyPhrase)
    {
        $this->ProductKeyPhrase = $ProductKeyPhrase;

        return $this;
    }

    /**
     * Gets the Extended product description for internal use.
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->ProductDescription;
    }
    
    /**
     * Sets the Extended product description for internal use.
     *
     * @param string $ProductDescription the product description 
     *
     * @return self
     */
    public function setProductDescription($ProductDescription)
    {
        $this->ProductDescription = $ProductDescription;

        return $this;
    }

    /**
     * Gets the Price excluding taxes.
     *
     * @return float
     */
    public function getPriceExcl()
    {
        return $this->PriceExcl;
    }
    
    /**
     * Sets the Price excluding taxes.
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
     * Gets the The price period
     * This can be d for daily, w for week, m for month, k for quarter,
     * h for half a year, j for a year and t for two years.
     *
     * @return string
     */
    public function getPricePeriod()
    {
        return $this->PricePeriod;
    }
    
    /**
     * Sets the The price period
     * This can be d for daily, w for week, m for month, k for quarter,
     * h for half a year, j for a year and t for two years.
     *
     * @param string $PricePeriod the price period 
     *
     * @return self
     */
    public function setPricePeriod($PricePeriod)
    {
        $this->PricePeriod = $PricePeriod;

        return $this;
    }

    /**
     * Gets the The tax percentage
     * Can be 0-100.
     *
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }
    
    /**
     * Sets the The tax percentage
     * Can be 0-100.
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
     * Gets the An array with ID's of product groups.
     *
     * @return array
     */
    public function getGroups()
    {
        return $this->Groups;
    }
    
    /**
     * Sets the An array with ID's of product groups.
     *
     * @param array $Groups the groups 
     *
     * @return self
     */
    public function setGroups(array $Groups)
    {
        $this->Groups = $Groups;

        return $this;
    }
}
