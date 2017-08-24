<?php

namespace uSendit\API;

class GetCreditPacksResult
{

    /**
     * @var GetCreditPacksStatus $GetCreditPacksStatus
     */
    protected $GetCreditPacksStatus = null;

    /**
     * @var string $GetCreditPacksMessage
     */
    protected $GetCreditPacksMessage = null;

    /**
     * @var ArrayOfPack $Packs
     */
    protected $Packs = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @param GetCreditPacksStatus $GetCreditPacksStatus
     */
    public function __construct($GetCreditPacksStatus)
    {
      $this->GetCreditPacksStatus = $GetCreditPacksStatus;
    }

    /**
     * @return GetCreditPacksStatus
     */
    public function getGetCreditPacksStatus()
    {
      return $this->GetCreditPacksStatus;
    }

    /**
     * @param GetCreditPacksStatus $GetCreditPacksStatus
     * @return \uSendit\API\GetCreditPacksResult
     */
    public function setGetCreditPacksStatus($GetCreditPacksStatus)
    {
      $this->GetCreditPacksStatus = $GetCreditPacksStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getGetCreditPacksMessage()
    {
      return $this->GetCreditPacksMessage;
    }

    /**
     * @param string $GetCreditPacksMessage
     * @return \uSendit\API\GetCreditPacksResult
     */
    public function setGetCreditPacksMessage($GetCreditPacksMessage)
    {
      $this->GetCreditPacksMessage = $GetCreditPacksMessage;
      return $this;
    }

    /**
     * @return ArrayOfPack
     */
    public function getPacks()
    {
      return $this->Packs;
    }

    /**
     * @param ArrayOfPack $Packs
     * @return \uSendit\API\GetCreditPacksResult
     */
    public function setPacks($Packs)
    {
      $this->Packs = $Packs;
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
     * @return \uSendit\API\GetCreditPacksResult
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

}
