<?php

namespace uSendit\API;

class InvoiceInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $TaxIdentificationNumber
     */
    protected $TaxIdentificationNumber = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \uSendit\API\InvoiceInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \uSendit\API\InvoiceInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxIdentificationNumber()
    {
      return $this->TaxIdentificationNumber;
    }

    /**
     * @param string $TaxIdentificationNumber
     * @return \uSendit\API\InvoiceInfo
     */
    public function setTaxIdentificationNumber($TaxIdentificationNumber)
    {
      $this->TaxIdentificationNumber = $TaxIdentificationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \uSendit\API\InvoiceInfo
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \uSendit\API\InvoiceInfo
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \uSendit\API\InvoiceInfo
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \uSendit\API\InvoiceInfo
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

}
