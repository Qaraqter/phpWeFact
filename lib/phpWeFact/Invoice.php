<?php

namespace phpWeFact;

class Invoice
{
    /**
     * The invoice code
     * @var string
     */
    protected $InvoiceCode;

    /**
     * The unique ID of a debtor
     * @var int
     */
    protected $Debtor;

    /**
     * The debtor code
     * @var string
     */
    protected $DebtorCode;

    /**
     * The date of the invoice
     * @var string
     */
    protected $Date;

    /**
     * The payment term
     * @var int
     */
    protected $Term;

    /**
     * The amount already paid
     * @var float
     */
    protected $AmountPaid;

    /**
     * The Discount percentage on the invoice (1-100)
     * @var float
     */
    protected $Discount;

    /**
     * The Coupon/voucher code
     * @var string
     */
    protected $Coupon;

    /**
     * The reference number
     * @var string
     */
    protected $ReferenceNumber;

    /**
     * The debtors company name
     * @var string
     */
    protected $CompanyName;

    /**
     * The debtors initials
     * @var string
     */
    protected $Initials;

    /**
     * The debtors surname
     * @var string
     */
    protected $SurName;

    /**
     * The debtors sex (m or f)
     * @var string
     */
    protected $Sex;

    /**
     * The debtors address
     * @var string
     */
    protected $Address;

    /**
     * The debtors zipcode
     * @var string
     */
    protected $ZipCode;

    /**
     * The debtors city
     * @var string
     */
    protected $City;

    /**
     * The debtors country (ISO_3166-1)
     * @var string
     */
    protected $Country;

    /**
     * The debtors email address
     * @var string
     */
    protected $EmailAddress;

    /**
     * The invoice method
     * 0 = by email
     * 1 = by mail
     * 3 = by post and mail
     * @var int
     */
    protected $InvoiceMethod;

    /**
     * The sent date of the invoice
     * @var string
     */
    protected $SentDate;

    /**
     * The amount of times the invoice has been sent
     * @var int
     */
    protected $Sent;

    /**
     * The amount of reminders that have been sent
     * @var int
     */
    protected $Reminders;

    /**
     * The date of the last sent reminder
     * @var string
     */
    protected $ReminderDate;

    /**
     * The amount of summations that have been sent
     * @var int
     */
    protected $Summations;

    /**
     * The date of the last sent summation
     * @var string
     */
    protected $SummationDate;

    /**
     * Authorization for direct debit
     * This can either be 'yes' or 'no' by default it will be the debtors
     * preference.
     * @var string
     */
    protected $Authorisation;

    /**
     * The payment method
     * Can be 'wire', 'auth', 'paypal', 'ideal' or 'other'
     * @var string
     */
    protected $PaymentMethod;

    /**
     * The date the payment was made
     * @var string
     */
    protected $PayDate;

    /**
     * The transaction id of the (online) payment
     * @var string
     */
    protected $TransactionID;

    /**
     * The description of the invoice
     * @var string
     */
    protected $Description;

    /**
     * The internal comments associated with the invoice
     * @var string
     */
    protected $Comment;

    /**
     * The invoice status
     * This can be 0 for concept, 2 for sent, 3 for accepted, 4 for created,
     * 8 for not accepted.
     * @var int
     */
    protected $Status;

    /**
     * The InvoiceLines
     * @var array
     */
    protected $InvoiceLines;

    public function __construct()
    {
        $InvoiceLines = array();
    }

    /**
     * Gets the The invoice code.
     *
     * @return string
     */
    public function getInvoiceCode()
    {
        return $this->InvoiceCode;
    }
    
    /**
     * Sets the The invoice code.
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
     * Gets the The unique ID of a debtor.
     *
     * @return int
     */
    public function getDebtor()
    {
        return $this->Debtor;
    }
    
    /**
     * Sets the The unique ID of a debtor.
     *
     * @param int $Debtor the debtor 
     *
     * @return self
     */
    public function setDebtor($Debtor)
    {
        $this->Debtor = $Debtor;

        return $this;
    }

    /**
     * Gets the The debtor code.
     *
     * @return string
     */
    public function getDebtorCode()
    {
        return $this->DebtorCode;
    }
    
    /**
     * Sets the The debtor code.
     *
     * @param string $DebtorCode the debtor code 
     *
     * @return self
     */
    public function setDebtorCode($DebtorCode)
    {
        $this->DebtorCode = $DebtorCode;

        return $this;
    }

    /**
     * Gets the The date of the invoice.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }
    
    /**
     * Sets the The date of the invoice.
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
     * Gets the The payment term.
     *
     * @return int
     */
    public function getTerm()
    {
        return $this->Term;
    }
    
    /**
     * Sets the The payment term.
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
     * Gets the The amount already paid.
     *
     * @return float
     */
    public function getAmountPaid()
    {
        return $this->AmountPaid;
    }
    
    /**
     * Sets the The amount already paid.
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
     * Gets the The Discount percentage on the invoice (1-100).
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    
    /**
     * Sets the The Discount percentage on the invoice (1-100).
     *
     * @param float $Discount the discount 
     *
     * @return self
     */
    public function setDiscount($Discount)
    {
        $this->Discount = $Discount;

        return $this;
    }

    /**
     * Gets the The Coupon/voucher code.
     *
     * @return string
     */
    public function getCoupon()
    {
        return $this->Coupon;
    }
    
    /**
     * Sets the The Coupon/voucher code.
     *
     * @param string $Coupon the coupon 
     *
     * @return self
     */
    public function setCoupon($Coupon)
    {
        $this->Coupon = $Coupon;

        return $this;
    }

    /**
     * Gets the The reference number.
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }
    
    /**
     * Sets the The reference number.
     *
     * @param string $ReferenceNumber the reference number 
     *
     * @return self
     */
    public function setReferenceNumber($ReferenceNumber)
    {
        $this->ReferenceNumber = $ReferenceNumber;

        return $this;
    }

    /**
     * Gets the The debtors company name.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    
    /**
     * Sets the The debtors company name.
     *
     * @param string $CompanyName the company name 
     *
     * @return self
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }

    /**
     * Gets the The debtors initials.
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }
    
    /**
     * Sets the The debtors initials.
     *
     * @param string $Initials the initials 
     *
     * @return self
     */
    public function setInitials($Initials)
    {
        $this->Initials = $Initials;

        return $this;
    }

    /**
     * Gets the The debtors surname.
     *
     * @return string
     */
    public function getSurName()
    {
        return $this->SurName;
    }
    
    /**
     * Sets the The debtors surname.
     *
     * @param string $SurName the sur name 
     *
     * @return self
     */
    public function setSurName($SurName)
    {
        $this->SurName = $SurName;

        return $this;
    }

    /**
     * Gets the The debtors sex (m or f).
     *
     * @return string
     */
    public function getSex()
    {
        return $this->Sex;
    }
    
    /**
     * Sets the The debtors sex (m or f).
     *
     * @param string $Sex the sex 
     *
     * @return self
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;

        return $this;
    }

    /**
     * Gets the The debtors address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }
    
    /**
     * Sets the The debtors address.
     *
     * @param string $Address the address 
     *
     * @return self
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;

        return $this;
    }

    /**
     * Gets the The debtors zipcode.
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }
    
    /**
     * Sets the The debtors zipcode.
     *
     * @param string $ZipCode the zip code 
     *
     * @return self
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }

    /**
     * Gets the The debtors city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }
    
    /**
     * Sets the The debtors city.
     *
     * @param string $City the city 
     *
     * @return self
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * Gets the The debtors country (ISO_3166-1).
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }
    
    /**
     * Sets the The debtors country (ISO_3166-1).
     *
     * @param string $Country the country 
     *
     * @return self
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;

        return $this;
    }

    /**
     * Gets the The debtors email address.
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    
    /**
     * Sets the The debtors email address.
     *
     * @param string $EmailAddress the email address 
     *
     * @return self
     */
    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;

        return $this;
    }

    /**
     * Gets the The invoice method
     *
     * @return int
     */
    public function getInvoiceMethod()
    {
        return $this->InvoiceMethod;
    }
    
    /**
     * Sets the The invoice method
     *   0 = by email
     *   1 = by mail
     *   3 = by post and mail.
     *
     * @param int $InvoiceMethod the invoice method 
     *
     * @return self
     */
    public function setInvoiceMethod($InvoiceMethod)
    {
        $this->InvoiceMethod = $InvoiceMethod;

        return $this;
    }

    /**
     * Gets the The sent date of the invoice.
     *
     * @return string
     */
    public function getSentDate()
    {
        return $this->SentDate;
    }
    
    /**
     * Sets the The sent date of the invoice.
     *
     * @param string $SentDate the sent date 
     *
     * @return self
     */
    public function setSentDate($SentDate)
    {
        $this->SentDate = $SentDate;

        return $this;
    }

    /**
     * Gets the The amount of times the invoice has been sent.
     *
     * @return int
     */
    public function getSent()
    {
        return $this->Sent;
    }
    
    /**
     * Sets the The amount of times the invoice has been sent.
     *
     * @param int $Sent the sent 
     *
     * @return self
     */
    public function setSent($Sent)
    {
        $this->Sent = $Sent;

        return $this;
    }

    /**
     * Gets the The amount of reminders that have been sent.
     *
     * @return int
     */
    public function getReminders()
    {
        return $this->Reminders;
    }
    
    /**
     * Sets the The amount of reminders that have been sent.
     *
     * @param int $Reminders the reminders 
     *
     * @return self
     */
    public function setReminders($Reminders)
    {
        $this->Reminders = $Reminders;

        return $this;
    }

    /**
     * Gets the The date of the last sent reminder.
     *
     * @return string
     */
    public function getReminderDate()
    {
        return $this->ReminderDate;
    }
    
    /**
     * Sets the The date of the last sent reminder.
     *
     * @param string $ReminderDate the reminder date 
     *
     * @return self
     */
    public function setReminderDate($ReminderDate)
    {
        $this->ReminderDate = $ReminderDate;

        return $this;
    }

    /**
     * Gets the The amount of summations that have been sent.
     *
     * @return int
     */
    public function getSummations()
    {
        return $this->Summations;
    }
    
    /**
     * Sets the The amount of summations that have been sent.
     *
     * @param int $Summations the summations 
     *
     * @return self
     */
    public function setSummations($Summations)
    {
        $this->Summations = $Summations;

        return $this;
    }

    /**
     * Gets the The date of the last sent summation.
     *
     * @return string
     */
    public function getSummationDate()
    {
        return $this->SummationDate;
    }
    
    /**
     * Sets the The date of the last sent summation.
     *
     * @param string $SummationDate the summation date 
     *
     * @return self
     */
    public function setSummationDate($SummationDate)
    {
        $this->SummationDate = $SummationDate;

        return $this;
    }

    /**
     * Gets the Authorization for direct debit
     *
     * @return string
     */
    public function getAuthorisation()
    {
        return $this->Authorisation;
    }
    
    /**
     * Sets the Authorization for direct debit
     * This can either be 'yes' or 'no' by default it will be the debtors
     * preference.
     *
     * @param string $Authorisation the authorisation 
     *
     * @return self
     */
    public function setAuthorisation($Authorisation)
    {
        $this->Authorisation = $Authorisation;

        return $this;
    }

    /**
     * Gets the The payment method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    
    /**
     * Sets the The payment method
     * Can be 'wire', 'auth', 'paypal', 'ideal' or 'other'.
     *
     * @param string $PaymentMethod the payment method 
     *
     * @return self
     */
    public function setPaymentMethod($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;

        return $this;
    }

    /**
     * Gets the The date the payment was made.
     *
     * @return string
     */
    public function getPayDate()
    {
        return $this->PayDate;
    }
    
    /**
     * Sets the The date the payment was made.
     *
     * @param string $PayDate the pay date 
     *
     * @return self
     */
    public function setPayDate($PayDate)
    {
        $this->PayDate = $PayDate;

        return $this;
    }

    /**
     * Gets the The transaction id of the (online) payment.
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    
    /**
     * Sets the The transaction id of the (online) payment.
     *
     * @param string $TransactionID the transaction id 
     *
     * @return self
     */
    public function setTransactionID($TransactionID)
    {
        $this->TransactionID = $TransactionID;

        return $this;
    }

    /**
     * Gets the The description of the invoice.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Sets the The description of the invoice.
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
     * Gets the The internal comments associated with the invoice.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }
    
    /**
     * Sets the The internal comments associated with the invoice.
     *
     * @param string $Comment the comment 
     *
     * @return self
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;

        return $this;
    }

    /**
     * Gets the The invoice status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }
    
    /**
     * Sets the The invoice status
     *This can be 0 for concept, 2 for sent, 3 for accepted, 4 for created,
     *8 for not accepted.
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
     * Gets the The InvoiceLines.
     *
     * @return array
     */
    public function getInvoiceLines()
    {
        return $this->InvoiceLines;
    }
    
    /**
     * Sets the The InvoiceLines.
     *
     * @param array $InvoiceLines the invoice lines 
     *
     * @return self
     */
    public function setInvoiceLines(array $InvoiceLines)
    {
        $this->InvoiceLines = $InvoiceLines;

        return $this;
    }

    /**
     * Adds an instance of InvoiceLine.
     *
     * @param InvoiceLine $InvoiceLine the credit invoice lines 
     *
     * @return self
     */
    public function addInvoiceLine(InvoiceLine $InvoiceLines)
    {
        $array = get_object_vars($InvoiceLines);
        array_push($this->InvoiceLines, $array);

        return $this;
    }
}
