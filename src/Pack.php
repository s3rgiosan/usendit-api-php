<?php

namespace uSendit\API;

class Pack
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $Credits
     */
    protected $Credits = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var float $TaxPercentage
     */
    protected $TaxPercentage = null;

    /**
     * @param int $Id
     * @param int $Credits
     * @param float $Price
     * @param float $TaxPercentage
     */
    public function __construct($Id, $Credits, $Price, $TaxPercentage)
    {
      $this->Id = $Id;
      $this->Credits = $Credits;
      $this->Price = $Price;
      $this->TaxPercentage = $TaxPercentage;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \uSendit\API\Pack
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \uSendit\API\Pack
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getCredits()
    {
      return $this->Credits;
    }

    /**
     * @param int $Credits
     * @return \uSendit\API\Pack
     */
    public function setCredits($Credits)
    {
      $this->Credits = $Credits;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \uSendit\API\Pack
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxPercentage()
    {
      return $this->TaxPercentage;
    }

    /**
     * @param float $TaxPercentage
     * @return \uSendit\API\Pack
     */
    public function setTaxPercentage($TaxPercentage)
    {
      $this->TaxPercentage = $TaxPercentage;
      return $this;
    }

}
