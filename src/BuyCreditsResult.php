<?php

namespace uSendit\API;

class BuyCreditsResult
{

    /**
     * @var BuyCreditsStatus $BuyCreditsStatus
     */
    protected $BuyCreditsStatus = null;

    /**
     * @var string $BuyCreditsMessage
     */
    protected $BuyCreditsMessage = null;

    /**
     * @var string $Entity
     */
    protected $Entity = null;

    /**
     * @var string $PaymentReference
     */
    protected $PaymentReference = null;

    /**
     * @var string $Amount
     */
    protected $Amount = null;

    /**
     * @var string $CreditCardLink
     */
    protected $CreditCardLink = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @param BuyCreditsStatus $BuyCreditsStatus
     */
    public function __construct($BuyCreditsStatus)
    {
      $this->BuyCreditsStatus = $BuyCreditsStatus;
    }

    /**
     * @return BuyCreditsStatus
     */
    public function getBuyCreditsStatus()
    {
      return $this->BuyCreditsStatus;
    }

    /**
     * @param BuyCreditsStatus $BuyCreditsStatus
     * @return \uSendit\API\BuyCreditsResult
     */
    public function setBuyCreditsStatus($BuyCreditsStatus)
    {
      $this->BuyCreditsStatus = $BuyCreditsStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyCreditsMessage()
    {
      return $this->BuyCreditsMessage;
    }

    /**
     * @param string $BuyCreditsMessage
     * @return \uSendit\API\BuyCreditsResult
     */
    public function setBuyCreditsMessage($BuyCreditsMessage)
    {
      $this->BuyCreditsMessage = $BuyCreditsMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntity()
    {
      return $this->Entity;
    }

    /**
     * @param string $Entity
     * @return \uSendit\API\BuyCreditsResult
     */
    public function setEntity($Entity)
    {
      $this->Entity = $Entity;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentReference()
    {
      return $this->PaymentReference;
    }

    /**
     * @param string $PaymentReference
     * @return \uSendit\API\BuyCreditsResult
     */
    public function setPaymentReference($PaymentReference)
    {
      $this->PaymentReference = $PaymentReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param string $Amount
     * @return \uSendit\API\BuyCreditsResult
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardLink()
    {
      return $this->CreditCardLink;
    }

    /**
     * @param string $CreditCardLink
     * @return \uSendit\API\BuyCreditsResult
     */
    public function setCreditCardLink($CreditCardLink)
    {
      $this->CreditCardLink = $CreditCardLink;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \uSendit\API\BuyCreditsResult
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

}
