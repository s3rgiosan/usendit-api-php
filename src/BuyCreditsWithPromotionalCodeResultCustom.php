<?php

namespace uSendit\API;

class BuyCreditsWithPromotionalCodeResultCustom
{

    /**
     * @var BuyCreditsWithPromotionalCodeStatus $BuyCreditsWithPromotionalCodeStatus
     */
    protected $BuyCreditsWithPromotionalCodeStatus = null;

    /**
     * @var string $BuyCreditsWithPromotionalCodeMessage
     */
    protected $BuyCreditsWithPromotionalCodeMessage = null;

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
     * @param BuyCreditsWithPromotionalCodeStatus $BuyCreditsWithPromotionalCodeStatus
     */
    public function __construct($BuyCreditsWithPromotionalCodeStatus)
    {
      $this->BuyCreditsWithPromotionalCodeStatus = $BuyCreditsWithPromotionalCodeStatus;
    }

    /**
     * @return BuyCreditsWithPromotionalCodeStatus
     */
    public function getBuyCreditsWithPromotionalCodeStatus()
    {
      return $this->BuyCreditsWithPromotionalCodeStatus;
    }

    /**
     * @param BuyCreditsWithPromotionalCodeStatus $BuyCreditsWithPromotionalCodeStatus
     * @return \uSendit\API\BuyCreditsWithPromotionalCodeResult
     */
    public function setBuyCreditsWithPromotionalCodeStatus($BuyCreditsWithPromotionalCodeStatus)
    {
      $this->BuyCreditsWithPromotionalCodeStatus = $BuyCreditsWithPromotionalCodeStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyCreditsWithPromotionalCodeMessage()
    {
      return $this->BuyCreditsWithPromotionalCodeMessage;
    }

    /**
     * @param string $BuyCreditsWithPromotionalCodeMessage
     * @return \uSendit\API\BuyCreditsWithPromotionalCodeResult
     */
    public function setBuyCreditsWithPromotionalCodeMessage($BuyCreditsWithPromotionalCodeMessage)
    {
      $this->BuyCreditsWithPromotionalCodeMessage = $BuyCreditsWithPromotionalCodeMessage;
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
     * @return \uSendit\API\BuyCreditsWithPromotionalCodeResult
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
     * @return \uSendit\API\BuyCreditsWithPromotionalCodeResult
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
     * @return \uSendit\API\BuyCreditsWithPromotionalCodeResult
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
     * @return \uSendit\API\BuyCreditsWithPromotionalCodeResult
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
     * @return \uSendit\API\BuyCreditsWithPromotionalCodeResult
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

}
